<AdvancedReps>
@for ($i = 1500; $i < 2020; $i++)

      <IRule xsi:type="Rule">
        <enabled_>true</enabled_>
        <Name>{{ $i }}</Name>
        <ruletype_>OnWholePage</ruletype_>
        <replace_>|Date=
|</replace_>
        <with_>|Date={{ $i }}
|</with_>
        <ifContains_>Category:Books from Russia, {{ $i }}</ifContains_>
        <ifNotContains_ />
        <regex_>false</regex_>
        <ifIsRegex_>false</ifIsRegex_>
        <numoftimes_>1</numoftimes_>
        <ifRegexOptions_>None</ifRegexOptions_>
        <regexOptions_>None</regexOptions_>
      </IRule>

@endfor
</AdvancedReps>