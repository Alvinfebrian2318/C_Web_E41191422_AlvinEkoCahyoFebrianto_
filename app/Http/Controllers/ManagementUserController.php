<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controllers extends Controllers
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam Controller ManagementUser.":
        return "Method ini nnatinya akan digunakan untuk mengambil semua data user";
    }
    public function create()
    {
        
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store()
    
    {
        
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show()
    {
      
        return "Method  ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit()
    {
       
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request , $id)
    {
        return " Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destroy($id)
{
    return "Method ini nantinya  digunakan untuk menghapus  data user dengan id=" . $id;
}

    //di sini isis controller Management User
}
?>