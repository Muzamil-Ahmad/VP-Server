<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    public function index(){

    }

    public function create(Request $request){
      // dd($request->supplierId);
        try {
       
            $validation1 = Validator::make($request->all(),
                [
                'logo' => 'required:jpeg,png,jpg,gif',
                ]
            );
            if ($validation1->passes()) {
                $file1      = $request->file('logo');
                $filename1  = $file1->getClientOriginalName();
                $extension1 = $file1->getClientOriginalExtension();
                $picture1   = date('His').'-'.$filename1;
                $file1->move(public_path('img'), $picture1);
               
                
            }else {
                return response()->json([
                    'message'   => $validation->errors()->all(),
                    'result'  => 'alert-danger'
                ]);
            }
            $check=DB::select("SELECT name FROM `brand` WHERE name='$request->name'AND is_deleted=0 AND supplier_id=$request->supplierId");
                if ($check==true) {
                    return response()->json([
                        'message'   => "Brand name already exists",
                        'result'  => 'alert-danger'
                    ]);
                }
            $slug=preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
            $res=DB::insert("INSERT INTO `brand` (`name`,`supplier_id`,`slug`,`logo`,`alt_tag`) VALUES ('$request->name','$request->supplierId','$slug','$picture1','$request->alt_tag')");
           
            if ($res==true) {
                return response()->json([
                    'message'   => "Saved Successfully",
                    'result'  => 'alert-success'
                ]);
            }else{
                return response()->json([
                    'message'   => "OOPS! Something went wrong",
                    'result'  => 'alert-danger'
                ]);
            }
        }
        catch (Exception $error) {
            Log::debug($error);
            return response()->json(['success'=>false, 'error' => $error],500);
        }  
    }
    
    public function get(Request $request){
        try{  

            $columns = array(
                0 => 'id',
                1 => 'name',
                2 => 'logo'
            );
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir   = $request->input('order.0.dir');

        
        $data = array();
           $totalData=\DB::table('brand')->where(['is_deleted'=>0])->where(['supplier_id'=>$request->query('supplierId')])->count();
           $details=\DB::table('brand')->where(['is_deleted'=>0])->where(['supplier_id'=>$request->query('supplierId')])
           ->when($start, function($query,$start){
            return $query->offset($start);
           })
           ->limit($limit)
           ->orderby($order,$dir)
           ->get();
           if($details) {
            foreach ($details as $key => $entity) {
              $nestedData['index'] = $key+1;
                $nestedData['id'] = $entity->id;
                $nestedData['name'] = $entity->name;
                $nestedData['logo'] = $entity->logo;
                $data[] = $nestedData;
            }
        }
        // $totalData=count($details);
        $totalFiltered = $totalData;
        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );
        return response()->json($json_data);
            }catch(Exception $ex){
                return response()->json(['result'=>'error','message'=>"Contact your system admintrator!",'data'=>'']); 
        }
 }

    public function edit($id){
        $result = DB::select("SELECT * FROM `brand` WHERE `brand`.`id` = $id AND `brand`.`is_deleted` = 0");
        if ($result) {
            return response()->json([ 'data' => $result[0]]);
        } else {
            return response()->json([
                'message'   => "OOPS! Something went wrong",
                'result'  => 'alert-danger'
            ]);
          }
    }

    public function update(Request $request){
        try {
                if($request->logochanged==1){
                    $validation1 = Validator::make($request->all(),
                        [
                        'logo' => 'required:jpeg,png,jpg,gif',
                        ]
                    );
                    if ($validation1->passes()) {
                        $file1      = $request->file('logo');
                        $filename1  = $file1->getClientOriginalName();
                        $extension1 = $file1->getClientOriginalExtension();
                        $picture1   = date('His').'-'.$filename1;
                        $file1->move(public_path('img'), $picture1);
                     } else {
                        return response()->json([
                            'message'   => $validation1->errors()->all(),
                            'result'  => 'alert-danger'
                        ]);
                    }
                }
                $check = DB::select("SELECT name FROM `brand` WHERE id<>'$request->id' AND name='$request->name' AND `is_deleted`=0 AND supplier_id=$request->supplierId");
     
                if (count($check)==1)
                    {
                        return response()->json(['message' => "Brand name already exists", 'class_name' => 'alert-danger']);
                    }
                if($request->logochanged == 1){
                            $res = DB::update("UPDATE `brand` SET `name` = '$request->name',`alt_tag` = '$request->alt_tag', `logo` = '$picture1' WHERE `brand`.`id` = $request->id");
                }else{
                            $res = DB::update("UPDATE `brand` SET `name` = '$request->name',`alt_tag` = '$request->alt_tag' WHERE `brand`.`id` = $request->id");
                }
                if ($res==0) {
                    return response()->json([
                        'message'   => "Updated Successfully",
                        'result'  => 'alert-success'
                    ]);
                }
                if ($res==true) {
                    return response()->json([
                        'message'   => "Updated Successfully",
                        'result'  => 'alert-success'
                    ]);
                }else{
                    return response()->json([
                        'message'   => "OOPS! Something went wrong",
                        'result'  => 'alert-danger'
                    ]);
                }
        }
        catch (Exception $error) {
            Log::debug($error);
            return response()->json(['success'=>false, 'error' => $error],500);
        }  
       
     
    }
    public function delete($id){
        $assignedCount=\DB::table('products')->where(['brand_id'=>$id,'is_deleted'=>0])->count();
        if($assignedCount > 0){
            return response()->json([
                        'message'   => "Brand is assigned to product cannot be deleted!",
                        'result'=>'assigned'
            ]);
        }  
        $res = DB::update("UPDATE `brand` SET `is_deleted` = '1' WHERE `brand`.`id` = $id");
        if ($res==true) {
            return response()->json([
                'message'   => "Deleted Successfully",
                'result'  => 'success'
            ]);
        } else {
            return response()->json([
                'message'   => "OOPS! Something went wrong",
                'result'  => 'fail'
            ]);
        }
    }
}