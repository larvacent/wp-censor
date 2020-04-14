<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放器配置详情
 *
 * @method string getName() 获取播放器配置名字。
 * @method void setName(string $Name) 设置播放器配置名字。
 * @method string getType() 获取播放器配置类型，取值范围：
<li>Preset：系统预置配置；</li>
<li>Custom：用户自定义配置。</li>
 * @method void setType(string $Type) 设置播放器配置类型，取值范围：
<li>Preset：系统预置配置；</li>
<li>Custom：用户自定义配置。</li>
 * @method string getDrmSwitch() 获取播放 DRM 保护的自适应码流开关：
<li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li>
<li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
 * @method void setDrmSwitch(string $DrmSwitch) 设置播放 DRM 保护的自适应码流开关：
<li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li>
<li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() 获取允许输出的未加密的自适应码流模板 ID。
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) 设置允许输出的未加密的自适应码流模板 ID。
 * @method DrmStreamingsInfo getDrmStreamingsInfo() 获取允许输出的 DRM 自适应码流模板内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) 设置允许输出的 DRM 自适应码流模板内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImageSpriteDefinition() 获取允许输出的雪碧图模板 ID。
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) 设置允许输出的雪碧图模板 ID。
 * @method array getResolutionNameSet() 获取播放器对不于不同分辨率的子流展示名字。
 * @method void setResolutionNameSet(array $ResolutionNameSet) 设置播放器对不于不同分辨率的子流展示名字。
 * @method string getCreateTime() 获取播放器配置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setCreateTime(string $CreateTime) 设置播放器配置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getUpdateTime() 获取播放器配置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setUpdateTime(string $UpdateTime) 设置播放器配置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */
class PlayerConfig extends AbstractModel
{
    /**
     * @var string 播放器配置名字。
     */
    public $Name;

    /**
     * @var string 播放器配置类型，取值范围：
<li>Preset：系统预置配置；</li>
<li>Custom：用户自定义配置。</li>
     */
    public $Type;

    /**
     * @var string 播放 DRM 保护的自适应码流开关：
<li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li>
<li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
     */
    public $DrmSwitch;

    /**
     * @var integer 允许输出的未加密的自适应码流模板 ID。
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo 允许输出的 DRM 自适应码流模板内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer 允许输出的雪碧图模板 ID。
     */
    public $ImageSpriteDefinition;

    /**
     * @var array 播放器对不于不同分辨率的子流展示名字。
     */
    public $ResolutionNameSet;

    /**
     * @var string 播放器配置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $CreateTime;

    /**
     * @var string 播放器配置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $UpdateTime;

    /**
     * @param string $Name 播放器配置名字。
     * @param string $Type 播放器配置类型，取值范围：
<li>Preset：系统预置配置；</li>
<li>Custom：用户自定义配置。</li>
     * @param string $DrmSwitch 播放 DRM 保护的自适应码流开关：
<li>ON：开启，表示仅播放 DRM  保护的自适应码流输出；</li>
<li>OFF：关闭，表示播放未加密的自适应码流输出。</li>
     * @param integer $AdaptiveDynamicStreamingDefinition 允许输出的未加密的自适应码流模板 ID。
     * @param DrmStreamingsInfo $DrmStreamingsInfo 允许输出的 DRM 自适应码流模板内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImageSpriteDefinition 允许输出的雪碧图模板 ID。
     * @param array $ResolutionNameSet 播放器对不于不同分辨率的子流展示名字。
     * @param string $CreateTime 播放器配置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $UpdateTime 播放器配置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DrmSwitch",$param) and $param["DrmSwitch"] !== null) {
            $this->DrmSwitch = $param["DrmSwitch"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("DrmStreamingsInfo",$param) and $param["DrmStreamingsInfo"] !== null) {
            $this->DrmStreamingsInfo = new DrmStreamingsInfo();
            $this->DrmStreamingsInfo->deserialize($param["DrmStreamingsInfo"]);
        }

        if (array_key_exists("ImageSpriteDefinition",$param) and $param["ImageSpriteDefinition"] !== null) {
            $this->ImageSpriteDefinition = $param["ImageSpriteDefinition"];
        }

        if (array_key_exists("ResolutionNameSet",$param) and $param["ResolutionNameSet"] !== null) {
            $this->ResolutionNameSet = [];
            foreach ($param["ResolutionNameSet"] as $key => $value){
                $obj = new ResolutionNameInfo();
                $obj->deserialize($value);
                array_push($this->ResolutionNameSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
