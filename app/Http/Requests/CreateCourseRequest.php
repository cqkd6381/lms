<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCourseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('course');
        $rules =  [
            'title'=>'required|min:3|max:15|unique:course,title,'.$id,
            'code'=>'required|min:10000|max:99999|integer|unique:course,code,'.$id,
            'teacher_id'=>'required|exists:users,id',
            'difficulty'=>'required|between:1,3',
            'category_id'=>'required|exists:category,id',
            'display_order'=>'required|between:1,9999',
            'introduction'=>'required',
            'description'=>'required',

        ];

        if($this->isMethod('POST')){
            $rules['imgpath'] = 'required';
        }
        return $rules;
    }
}
