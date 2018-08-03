<?php
namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;


class LiveSearch extends Controller
{
    function index()
    {
        return view('search');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = Tags::where('tag_name', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }
            else
            {
                $data = '';
            }
            $total_row = $data->count();

            if($total_row > 0)
            {
                foreach($data as $row)
                {

                    $output .= "<td>". $row->tag_name ."</td> ";
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
