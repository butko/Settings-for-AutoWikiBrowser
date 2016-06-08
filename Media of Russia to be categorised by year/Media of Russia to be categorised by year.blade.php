<AdvancedReps>
@for ($i = 1500; $i < 2020; $i++)
<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }} book, PDF</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Category:Media of Russia to be categorised by year</replace_>
    <with_>Category:Books from Russia, {{ $i }}</with_>
    <ifContains_>{{ $i }}.PDF</ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }} book, pdf</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Category:Media of Russia to be categorised by year</replace_>
    <with_>Category:Books from Russia, {{ $i }}</with_>
    <ifContains_>{{ $i }}.pdf</ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }} book, djvu</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Category:Media of Russia to be categorised by year</replace_>
    <with_>Category:Books from Russia, {{ $i }}</with_>
    <ifContains_>{{ $i }}.djvu</ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }} book, ()</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Category:Media of Russia to be categorised by year</replace_>
    <with_>Category:Books from Russia, {{ $i }}</with_>
    <ifContains_>({{ $i }})</ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

<IRule xsi:type="Rule">
    <enabled_>true</enabled_>
    <Name>{{ $i }} book, space</Name>
    <ruletype_>OnWholePage</ruletype_>
    <replace_>Category:Media of Russia to be categorised by year</replace_>
    <with_>Category:Books from Russia, {{ $i }}</with_>
    <ifContains_> {{ $i }} </ifContains_>
    <ifNotContains_ />
    <regex_>false</regex_>
    <ifIsRegex_>false</ifIsRegex_>
    <numoftimes_>1</numoftimes_>
    <ifRegexOptions_>None</ifRegexOptions_>
    <regexOptions_>None</regexOptions_>
</IRule>

@endfor
</AdvancedReps>