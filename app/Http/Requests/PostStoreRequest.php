<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class PostStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'user_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'tags' => 'required|array',
            'excerpt' => 'required',
            'body' => 'required',
            'status' => 'required|in:DRAFT,PUBLISHED',
        ];

        if($this->get('image'))
            $rules = array_merge($rules, ['image' => 'mimes:jpg, jpeg, png']);

        return $rules;
    }
}
