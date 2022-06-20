<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\admin;
Use Illuminate\Support\Facades\Hash;
use App\Models\imgs;

class editController extends Controller
{

    //------------------------------------------------------------------------------ HOME PAGE
    public function updateHero(Request $request)
    {
        // $imgs= new imgs;

        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time(). '.' . $extension;
        //     $file->move('assets/',$fileName);
        //     //$imgs->image = $fileName;
        // }
        //$imgs->save();

        $request->validate([
            'churchname' => 'required',
            'churchtype' => 'required',
            'tagline' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg'
        ]);
        $id = $request->input('id');
        $name = Str::upper($request->input('churchname'));
        $type = Str::upper($request->input('churchtype'));
        $tagline = $request->input('tagline');
        $newimage = $request->input('image');
        $oldimage = $request->input('oldimage');

        

        if ($request->input('image') == "") {
            $query=DB::update('update hero set churchName = ?, churchType=?, tagline=?, img=? where id = ?', [$name, $type, $tagline, $oldimage, $id]);
        } else {
            $query=DB::update('update hero set churchName = ?, churchType=?, tagline=?,img=? where id = ?', [$name, $type, $tagline, $newimage, $id]);
        }

        if($query){
            return redirect()->back()->with('success', 'Header updated Successfully');
        }
        else{
            return redirect()->back()->with('fail', 'Header update error');
        }
    }
    public function updateSched(Request $request,$id)
    {
        $time =  Str::ucfirst($request->input('time'));
        $description =  Str::ucfirst($request->input('desc'));
        DB::update('update sched set time = ?, description=? where id = ?', [$time, $description, $id]);
        return redirect('editHome')->with('success', 'Schedule updated Successfully');
    }

    public function addSched(Request $request)
    {
        $request->validate([
            'addtime' => 'required',
            'adddescription' => 'required',
        ]);

        $time =  Str::ucfirst($request->input('addtime'));
        $description =  Str::ucfirst($request->input('adddescription'));
        DB::insert('insert into sched (time,description) values(?,?)', [$time, $description]);
        return redirect()->back()->with('success', 'Schedule added Successfully');
    }

    public function destroy($id)
    {
        DB::delete('delete from sched where id = ?', [$id]);
        return redirect()->back()->with('success', 'Schedule deleted Successfully');
    }

    public function showSched($id)
    {
        if (session()->has('LoggedUser')) {
            $admins = admin::where('id', '=', session('LoggedUser'))->first();
            $scheds = DB::select('select * from sched where id = ?', [$id]);
            $data = [
                'LoggedUserInfo' => $admins
            ];
        }
        return view('etr/admin/sched', $data, ['scheds' => $scheds]);
    }

    //------------------------------------------------------------------------------ MINISTRY PAGE

    public function showMinistry($id)
    {
        if (session()->has('LoggedUser')) {
            $admins = admin::where('id', '=', session('LoggedUser'))->first();
            $mins = DB::select('select * from ministries where id = ?', [$id]);
            $data = [
                'LoggedUserInfo' => $admins
            ];
        }
        return view('etr/admin/ministry', $data, ['mins' => $mins]);
    }
    public function updateCaption(Request $request)
    {

        $id =  $request->input('id');
        $name =  Str::ucfirst($request->input('mincap'));
        DB::update('update ministrycaption set caption=? where id = ?', [$name, $id]);
        return redirect()->back()->with('success', 'Caption updated Successfully');
    }
    public function updateMinistry(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $name =  Str::ucfirst($request->input('name'));
        $img1 = $request->input('img1');
        $oldimg1 = $request->input('oldimg1');
        $img2 = $request->input('img2');
        $oldimg2 = $request->input('oldimg2');
        $ver = Str::upper($request->input('ver'));;
        $cap = Str::ucfirst($request->input('cap'));
        if($request->input('cap')==""){
            $cap="";
        }

        if($request->input('ver')==""){
            $ver="";
        }


        if ($img1 != null) {
            $query = DB::update('update ministries set name=?,img1=?,img2=?,caption=? verse=? where id = ?', [$name, $img1, $oldimg2,$cap,$ver, $id]);
        } else if ($img2 != null) {
            $query =DB::update('update ministries set name=?,img1=?,img2=?,caption=? verse=? where id = ?', [$name, $oldimg1, $img2,$cap,$ver, $id]);
        } else if ($img1 != "" && $img2 != "") {
            $query =DB::update('update ministries set name=?,img1=?,img2=?,caption=? verse=? where id = ?', [$name, $img1, $img2,$cap,$ver, $id]);
        } else {
            $query =DB::update('update ministries set name=?, caption=?, verse=? where id = ?', [$name, $cap, $ver, $id]);
        }

        if($query){
            return redirect('/editMinistries')->with('success', 'Data updated Successfully');
        }
        else{
            return redirect('/editMinistries')->with('fail', 'error Updating');
        }
    }
    public function deleteministry($id)
    {
        DB::delete('delete from ministries where id = ?', [$id]);
        return redirect()->back()->with('success', 'Ministry deleted Successfully');
    }

    public function addMinistry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'addimg1' => 'required',
            'addimg2' => 'required',
        ]);


        $name =  Str::ucfirst($request->input('name'));
        $img1 =  $request->input('addimg1');
        $img2 =  $request->input('addimg2');
        $verse =  Str::upper($request->input('verse'));
        $caption =  Str::ucfirst($request->input('caption'));
        $query = DB::insert('insert into ministries (name,img1,img2,caption,verse) values(?,?,?,?,?)', [$name, $img1, $img2, $caption, $verse]);
        if ($query) {
            return redirect()->back()->with('success', 'Ministry added Successfully');
        } else
            return redirect()->back()->with('fail', 'Error Adding Ministry');
    }
    //------------------------------------------------------------------------------ About PAGE
    public function updateAbout(Request $request)
    {

        $id =  $request->input('id');
        $description =  Str::ucfirst($request->input('description'));
        $query = DB::update('UPDATE about SET description =? where id = ?', [$description, $id]);
        if ($query) {
            return redirect()->back()->with('success', 'Updated Successfully');
        } else
            return redirect()->back()->with('fail', 'Error Updating');
    }


    public function updatePastors(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $name =  Str::ucfirst($request->input('name'));
        $query = DB::update('UPDATE pastors SET name =? where id = ?', [$name, $id]);
        if ($query) {
            return redirect('editAbout')->with('success', 'Pastor updated Successfully');
        } else
            return redirect()->back()->with('fail', 'Error Updating');
    }
    public function deletepastor($id)
    {
        DB::delete('delete from pastors where id = ?', [$id]);
        return redirect()->back()->with('success', 'Pastor Details Removed');
    }

    public function addPastor(Request $request)
    {
        $request->validate([
            'addpastor' => 'required',
        ]);

        $name =  Str::ucfirst($request->input('addpastor'));
        DB::insert('insert into pastors (name) values(?)', [$name]);
        return redirect()->back()->with('success', 'Pastor added');
    }

    public function showPastor($id)
    {
        if (session()->has('LoggedUser')) {
            $admins = admin::where('id', '=', session('LoggedUser'))->first();
            $pastors = DB::select('select * from pastors where id = ?', [$id]);
            $data = [
                'LoggedUserInfo' => $admins
            ];
        }
        return view('etr/admin/editPastor', $data, ['pastors' => $pastors]);
    }
    //------------------------------------------------------------------------------ Announcement PAGE
    public function addAnnounce(Request $request)
    {
        $request->validate([
            'what' => 'required',
            'when' => 'required',
            'where' => 'required',
        ]);
        if ($request->input('how') == null) {
            $how = "";
        }

        $what =  Str::ucfirst($request->input('what'));
        $when = $request->input('when');
        $where =  Str::ucfirst($request->input('where'));
        $how =  Str::ucfirst($request->input('how'));
        $query = DB::insert('insert into announcement (what,event_day,venue,how) values(?,?,?,?)', [$what, $when, $where, $how]);
        if ($query) {
            return redirect()->back()->with('success', 'Announcement added Successfully');
        } else
            return redirect()->back()->with('fail', 'Error Adding Announcement');
    }

    public function deleteAnnounce($id)
    {
        DB::delete('delete from announcement where id = ?', [$id]);
        return redirect()->back()->with('success', 'Announcement Removed');
    }

    public function showAnnounce($id)
    {
        if (session()->has('LoggedUser')) {
            $admins = admin::where('id', '=', session('LoggedUser'))->first();
            $announces = DB::select('select * from announcement where id = ?', [$id]);
            $data = [
                'LoggedUserInfo' => $admins
            ];
        }
        return view('etr/admin/editAnnounce', $data, ['announces' => $announces]);
    }

    public function updateAnnounce(Request $request,$id)
    {
        $request->validate([
            'what' => 'required',
            'when' => 'required',
            'where' => 'required',
        ]);
        if ($request->input('how') == null) {
            $how = "";
        }
        $what =  Str::ucfirst($request->input('what'));
        $when = $request->input('when');
        $where =  Str::ucfirst($request->input('where'));
        $how =  Str::ucfirst($request->input('how'));
        $query = DB::insert('UPDATE announcement SET what=?,event_day=?,venue=?,how=? where id=?', [$what, $when, $where, $how,$id]);
        if ($query) {
            return redirect('/editAnnouncements')->with('success', 'Announcement Updated Successfully');
        } else
            return redirect()->back()->with('fail', 'Error updating Announcement');
    }

    //---user
    public function showUser($id)
    {
        if (session()->has('LoggedUser')) {
            $admins = admin::where('id', '=', session('LoggedUser'))->first();
            $users = DB::select('select * from admins where id = ?', [$id]);
            $data = [
                'LoggedUserInfo' => $admins
            ];
        }
        return view('etr/admin/user', $data, ['users' => $users]);
    }

    public function updateUser(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
            
        ]);
        $name =  Str::ucfirst($request->input('name'));
        $email = $request->input('email');
        $pass = Hash::make($request->input('pass'));
        if($request ->input('pass') == ""){
            $query = DB::update('UPDATE admins SET name =?, email =? where id = ?', [$name,$email, $id]);
        }
        else{
            $query = DB::update('UPDATE admins SET name =?, email =?, password = ? where id = ?', [$name,$email,$pass, $id]);
        }
        if ($query) {
            return redirect('profile')->with('success', 'User updated Successfully');
        } else
            return redirect()->back()->with('fail', 'Error Updating');
    }

    public function deleteUser($id)
    {
        DB::delete('delete from admins where id = ?', [$id]);
        return redirect()->back()->with('success', 'User Details Removed');
    }
}
