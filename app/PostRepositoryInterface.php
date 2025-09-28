<?php

namespace App;

interface PostRepositoryInterface
{
    public function all();
    public function find($id);
    //public function getBlogsByUser($userId);
    public function store($request);
    public function update($id,$request);
    public function allBlog();


    public function delete($id);
    public function show($id);
    public function search();




}
