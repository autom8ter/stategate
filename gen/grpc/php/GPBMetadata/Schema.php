<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace GPBMetadata;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\GithubCom\Mwitkow\GoProtoValidators\Validator::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a88110a0c736368656d612e70726f746f12097374617465676174651a1c" .
            "676f6f676c652f70726f746f6275662f7374727563742e70726f746f1a1f" .
            "676f6f676c652f70726f746f6275662f74696d657374616d702e70726f74" .
            "6f1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1b" .
            "676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a3667" .
            "69746875622e636f6d2f6d7769746b6f772f676f2d70726f746f2d76616c" .
            "696461746f72732f76616c696461746f722e70726f746f225d0a09456e74" .
            "697479526566121b0a06646f6d61696e180120012809420be2df1f070a05" .
            "5e5c532b2412190a0474797065180220012809420be2df1f070a055e5c53" .
            "2b2412180a036b6579180320012809420be2df1f070a055e5c532b242271" .
            "0a084576656e74526566121b0a06646f6d61696e180120012809420be2df" .
            "1f070a055e5c532b2412190a0474797065180220012809420be2df1f070a" .
            "055e5c532b2412180a036b6579180320012809420be2df1f070a055e5c53" .
            "2b2412130a0269641804200128094207e2df1f03900104228b010a06456e" .
            "74697479121b0a06646f6d61696e180120012809420be2df1f070a055e5c" .
            "532b2412190a0474797065180220012809420be2df1f070a055e5c532b24" .
            "12180a036b6579180320012809420be2df1f070a055e5c532b24122f0a06" .
            "76616c75657318042001280b32172e676f6f676c652e70726f746f627566" .
            "2e5374727563744206e2df1f022001222f0a08456e74697469657312230a" .
            "08656e74697469657318012003280b32112e7374617465676174652e456e" .
            "7469747922a6010a10536561726368456e746974794f707473121b0a0664" .
            "6f6d61696e180120012809420be2df1f070a055e5c532b2412190a047479" .
            "7065180220012809420be2df1f070a055e5c532b2412140a0c7175657279" .
            "5f737472696e6718032001280912150a056c696d69741804200128054206" .
            "e2df1f021000120e0a066f6666736574180520012805121d0a04736f7274" .
            "18092001280b320f2e7374617465676174652e536f727422bf010a0f5365" .
            "617263684576656e744f707473121b0a06646f6d61696e18012001280942" .
            "0be2df1f070a055e5c532b2412190a0474797065180220012809420be2df" .
            "1f070a055e5c532b2412140a0c71756572795f737472696e671804200128" .
            "09120b0a036d696e180520012803120b0a036d617818062001280312150a" .
            "056c696d69741807200128054206e2df1f021000120e0a066f6666736574" .
            "180820012805121d0a04736f727418092001280b320f2e73746174656761" .
            "74652e536f727422440a0a53747265616d4f707473121b0a06646f6d6169" .
            "6e180120012809420be2df1f070a055e5c532b2412190a04747970651802" .
            "20012809420be2df1f070a055e5c532b2422260a04536f7274120d0a0566" .
            "69656c64180120012809120f0a077265766572736518022001280822a601" .
            "0a054576656e7412130a0269641801200128094207e2df1f039001041229" .
            "0a06656e7469747918022001280b32112e7374617465676174652e456e74" .
            "6974794206e2df1f02200112160a066d6574686f641805200128094206e2" .
            "df1f025801122f0a06636c61696d7318032001280b32172e676f6f676c65" .
            "2e70726f746f6275662e5374727563744206e2df1f02200112140a047469" .
            "6d651804200128034206e2df1f021000222a0a064576656e747312200a06" .
            "6576656e747318012003280b32102e7374617465676174652e4576656e74" .
            "32d0040a0d456e7469747953657276696365125f0a0353657412112e7374" .
            "617465676174652e456e746974791a162e676f6f676c652e70726f746f62" .
            "75662e456d707479222d82d3e493022722252f6170692f656e746974792f" .
            "7265662f7b646f6d61696e7d2f7b747970657d2f7b6b65797d125b0a0445" .
            "64697412112e7374617465676174652e456e746974791a112e7374617465" .
            "676174652e456e74697479222d82d3e493022732252f6170692f656e7469" .
            "74792f7265662f7b646f6d61696e7d2f7b747970657d2f7b6b65797d1266" .
            "0a0652657665727412132e7374617465676174652e4576656e745265661a" .
            "112e7374617465676174652e456e74697479223482d3e493022e1a2c2f61" .
            "70692f656e746974792f7265662f7b646f6d61696e7d2f7b747970657d2f" .
            "7b6b65797d2f726576657274125d0a0347657412142e7374617465676174" .
            "652e456e746974795265661a112e7374617465676174652e456e74697479" .
            "222d82d3e493022712252f6170692f656e746974792f7265662f7b646f6d" .
            "61696e7d2f7b747970657d2f7b6b65797d12620a0344656c12142e737461" .
            "7465676174652e456e746974795265661a162e676f6f676c652e70726f74" .
            "6f6275662e456d707479222d82d3e49302272a252f6170692f656e746974" .
            "792f7265662f7b646f6d61696e7d2f7b747970657d2f7b6b65797d12560a" .
            "06536561726368121b2e7374617465676174652e536561726368456e7469" .
            "74794f7074731a132e7374617465676174652e456e746974696573221a82" .
            "d3e493021412122f6170692f656e746974792f7365617263683296020a0c" .
            "4576656e7453657276696365124f0a0653747265616d12152e7374617465" .
            "676174652e53747265616d4f7074731a102e7374617465676174652e4576" .
            "656e74221a82d3e493021412122f6170692f6576656e74732f7374726561" .
            "6d300112530a06536561726368121a2e7374617465676174652e53656172" .
            "63684576656e744f7074731a112e7374617465676174652e4576656e7473" .
            "221a82d3e493021412122f6170692f6576656e74732f7365617263681260" .
            "0a0347657412132e7374617465676174652e4576656e745265661a102e73" .
            "74617465676174652e4576656e74223282d3e493022c122a2f6170692f65" .
            "76656e74732f7265662f7b646f6d61696e7d2f7b747970657d2f7b6b6579" .
            "7d2f7b69647d420b5a09737461746567617465620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

