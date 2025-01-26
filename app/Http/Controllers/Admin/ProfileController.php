<?php
//課題4:【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう（→作成）
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //課題5:【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
