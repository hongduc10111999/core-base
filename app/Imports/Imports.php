<?php

namespace App\Imports;

use Corebase\Post\Models\Post;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;

class Imports implements ToModel
{
    private function data($row){
        return [
            'name' => $row[1],
            'slug' => $row[2],
            'image' => $row[3],
            'user_id' => $row[4],
            'category_id' => $row[5],
            'content' => $row[6],
            'note' => $row[9],
            'status' => $row[10],
            'banner' => $row[12],
        ];
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            if ($post['id'] == $row[0]) {
                $updataPost = $this->data($row);
                Post::find($post['id'])->update($updataPost);
                return;
            }
        }

        return new Post($this->data($row));
    }
}
