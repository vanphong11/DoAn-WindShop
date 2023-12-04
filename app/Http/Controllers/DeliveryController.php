<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;
class DeliveryController extends Controller
{
    public function Authlogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin') -> send();
        }
    }
    public function update_delivery(Request $request){
        $this ->Authlogin();
        $data = $request->all();
        // $fee_ship_id = $data['feeship_id'];
        // $fee_ship = Feeship::where('fee_id',$fee_ship_id)->first();
        $fee_ship = Feeship::find($data['feeship_id']);
        $fee_value = rtrim($data['fee_value'],'.');
        $fee_ship->fee_feeship =$fee_value;
        $fee_ship->save();
    }
    public function select_feeship(){
        $this ->Authlogin();
        $feeship = Feeship::with('city')->orderBy('fee_id','DESC')-> get();
        $output = ' </br>';
        $output .= '<div class = "table-responsive"> 
                        <table class = "table table-bordered">
                           <thread?>
                                <tr>
                                    <th>Tên thành phố</th>
                                    <th>Tên quận huyện</th>
                                    <th>Tên xã phường</th>
                                    <th>Phí ship</th>
                                </tr>
                           </thread> 
                           <tbody>
                           ';
                           foreach($feeship as $key => $fee){
                            $output .='
                                <tr>
                                    <td>'.$fee->city->name_tp.'</td>
                                    <td>'.$fee->province->name_qh.'</td>
                                    <td>'.$fee->wards->name_xp.'</td>
                                    <td contenteditable data-feeship_id="'.$fee->fee_id.'" class ="fee_feeship_edit">'.number_format($fee->fee_feeship,0,',','.').'</td>
                                </tr>';
                            }
                $output .='</tbody>
                        </table>
                    </div>';
            echo $output;
                    
    }
    public function insert_delivery(Request $request){
        $this ->Authlogin();
        $data = $request->all();
        $fee_ship = new Feeship();
        $fee_ship->fee_matp = $data['city'];
        $fee_ship->fee_maqh = $data['province'];
        $fee_ship->fee_xaid = $data['wards'];
        $fee_ship->fee_feeship = $data['fee_ship'];
        $fee_ship ->save();
    }
    
    public function delivery(Request $request){
        $this ->Authlogin();
        $city = City::orderby('matp','ASC')->get();
        return view('admin.delivery.add_delivery')->with(compact('city'));
    }
    public function select_delivery(Request $request){
        $this ->Authlogin();
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="city"){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                $output .= '<option>--Chọn quận huyện--</option>';
                foreach($select_province as $key => $province){
                    $output .= '<option value="'.$province->maqh.'">'.$province->name_qh.'</option>';
                }
                
            }else{
                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                $output .= '<option>--Chọn xã phường--</option>';
                foreach($select_wards as $key => $ward){
                    $output .= '<option value="'.$ward->xaid.'">'.$ward->name_xp.'</option>';
                }
            }
            echo $output;
        }
        
    }
}
