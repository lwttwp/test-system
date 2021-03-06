<?php
// +----------------------------------------------------------------------
// | YFCMF [ WE CAN DO IT MORE SIMPLE]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://yfcmf.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: rainfer <rainfer520@qq.com>
// +----------------------------------------------------------------------

namespace app\common\widget\form;

/**
 * 图标选择表单
 * @Author: rainfer <rainfer520@qq.com>
 */
class IconForm
{
    protected $default = [
        'name'        => '',//name
        'title'       => '',//标签
        'value'       => '',//值
        'attr'        => [
            'placeholder' => '请选择图标',//预设值
            'disabled'    => false,//是否只读
            'tips'        => '',//提示
            'label_class' => 'col-sm-3',//标签class
            'div_class'   => 'col-sm-9'//input上层div的class
        ],//属性
        'help_text'   => '',//帮助文本
        'extra_class' => 'col-xs-10 col-sm-5',//input的class
        'extra_attr'  => ''//input的css
    ];

    /**
     * 渲染
     *
     * @param string $name        表单项名
     * @param string $title       标题
     * @param string $default     默认值
     * @param string $help_text   帮助文本
     * @param array  $attr        属性，
     * @param string $extra_class 额外css类名
     * @param string $extra_attr  额外属性
     *
     * @return string
     */
    public function fetch($name, $title, $default = '', $help_text = '', $attr = [], $extra_class = 'col-xs-10 col-sm-5', $extra_attr = '')
    {
        $data         = [
            'name'        => $name,//name
            'title'       => $title,//标签
            'value'       => $default,
            'attr'        => $attr,
            'help_text'   => $help_text,
            'extra_class' => $extra_class,//input的class
            'extra_attr'  => $extra_attr//input的css
        ];
        $data['attr'] = isset($data['attr']) ? array_merge($this->default['attr'], $data['attr']) : $this->default['attr'];
        $data         = array_merge($this->default, $data);
        $html         = '<div class="form-group">';
        $html .= '<label class="' . $data['attr']['label_class'] . ' control-label no-padding-right"> ' . $data['title'] . ' </label>';
        $html .= '<div class="' . $data['attr']['div_class'] . '">';
        $html .= '<div class="input-group icon-picker ' . $data['extra_class'] . '">';
        $html .= '<span class="input-group-addon icon" data-rel="tooltip" data-placement="bottom" data-original-title="点击选择图标"><i class="'.($data['value'] ? : 'fa fa-info-circle').'"></i></span>';
        $html .= '<input type="text" name="' . $data['name'] . '" value="' . $data['value'] . '" id="icon-' . $data['name'] . '" class="form-control icon-input" style=" ' . $data['extra_attr'] . '" placeholder="' . $data['attr']['placeholder'] . '" ' . ($data['attr']['disabled'] ? 'disabled="disabled" ' : '') . ' ' . ($data['attr']['tips'] ? 'data-rel="tooltip" data-placement="bottom" data-original-title="' . $data['attr']['tips'] . '" ' : '') . ' />';
        $html .= '<span class="input-group-addon delete-icon" data-rel="tooltip" data-placement="bottom" data-original-title="删除"><i class="fa fa-times"></i></span></div>';
        if ($data['help_text']) {
            $html .= '<span class="middle help-text">' . $data['help_text'] . '</span>';
        }
        $html .= '</div></div>';
        return $html;
    }
}
