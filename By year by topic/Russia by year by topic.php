<AdvancedReps>
@for ($i = 1500; $i < 2020; $i++)
<?php
$str = floor($i / 10).'|'.$i % 10;
?>
<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }}</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Russia by year by topic|000|0}}@ {{ $i }} in Russia by topic@</replace_>
    <with_>Russia by year by topic|{{ $str }}}}</with_>
    <ifContains_>{{ $i }}</ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

@endfor
</AdvancedReps>