<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CoursewareRequest extends Request
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
        $rules = [
            'title'=>'required|min:3|max:40',
            'minutes'=>'required|integer',
            'display_order'=>'required',
            'description'=>'required',
        ];

        if($this->isMethod('POST')){
            $id = $this->route('course_ware');
            $rules['video'] = 'required';
            $rules['title']='required|min:3|max:40|unique:course_ware,title,'.$id;
        }
        return $rules;
    }
}
