<?php
    $hello = 'Hello';
    $name = 'World';
    $a = 2;
    $b = 10;
    $bool_1 = true;
    $bool_2 = false;
?>

<div class="knowledge first">
    <div class="knowledge_header">
        <h3>Числовые типы данных</h3>
    </div>
<div class="knowledge_body phpCode">
<code>
<span style="color: red">&lt;?php</span>
<pre style="margin: 20px; line-height: 125%;">
<span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;"><?php echo $a; ?></span>;
<span style="color: #ff9c20;">$b</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;"><?php echo $b; ?></span>;
<span style="color: #ff9c20;">$c</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">&$b</span>; <span style="color: #888888;">// ссылка на адрес переменной $b в памяти</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">+</span> <span style="color: #ff9c20;">$b</span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// сложение.</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">-</span><span style="color: #ff0000; background-color: #ffaaaa;">­</span> <span style="color: #ff9c20;">$b</span> . '&lt;br&gt;'; <span style="color: #888888;">// вычитание.</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">*</span> <span style="color: #ff9c20;">$b</span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// умножение.</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">/</span> <span style="color: #ff9c20;">$b</span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// деление</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">%</span> <span style="color: #ff9c20;">$b</span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// остаток от деления</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$a</span> <span style="color: #e4e7af;">**</span> <span style="color: #ff9c20;">$b</span><span style="color: #e4e7af;">; <span style="color: #888888;">// возведение в степень</span>
<span style="color: #ff9c20;">$b</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">123</span>;
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$c</span> <span style="color: #e4e7af;">; <span style="color: #888888;">// вывод значения переменной $b</span>
</pre>
            <span style="color: red">?&gt;</span>
<pre style="line-height: 125%;">
<span style="color: #888888;">&#8725;&#8725; Вывод:</span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a + $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a - $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a * $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a / $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a % $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php echo $a ** $b; ?></span>
<span style="color: #888888;">&#8725;&#8725; <?php $b=123; $c = $b; echo $c; ?></span>
</pre>
</code>
</div>
</div>
<div class="knowledge second">
    <div class="knowledge_header">
        <h3>Строковый тип данных<code>(string)</code></h3>
    </div>
<div class="knowledge_body phpCode">
<code>
<span style="color: red">&lt;?php</span>
<pre style="margin: 20px; line-height: 125%;">
<span style="color: #ff9c20;">$name</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">'<?php echo $name; ?>'</span>;
<span style="color: #ff9c20;">$hello</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">'<?php echo $hello; ?>'</span>;
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$hello</span> . ', ' . <span style="color: #ff9c20;">$name</span> . '!' <span style="color: #e4e7af;"> . '&lt;br&gt;';
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$name[0]</span>; <span style="color: #888888;">// первый элемент строки $name</span>
</pre>
<span style="color: red">?&gt;</span>
<pre style="line-height: 125%;">
    <span style="color: #888888;">&#8725;&#8725; Вывод:</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $hello . ', ' . $name . '!'; ?></span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $name[0]; ?></span>
</pre>
</code>
</div>
</div>
<div class="knowledge third">
    <div class="knowledge_header">
        <h3>Логический тип данных <code>(boolean)</code></h3>
    </div>

<div class="knowledge_body phpCode">
<code>
<span style="color: red">&lt;?php</span>
<pre style="margin: 20px; line-height: 125%;">
<span style="color: #ff9c20;">$bul_1</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">true</span>;
<span style="color: #ff9c20;">$bul_2</span> <span style="color: #e4e7af;">=</span> <span style="color: #3068dd; font-weight: bold;">false</span>;
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_1</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;';
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;';
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">!$bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// логическое отрицание, инверсия</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_1 <span style="color: #e4e7af;">&&</span> $bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// логическое умножение, конъюнкция</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_1 <span style="color: #e4e7af;">and</span> $bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// логическое умножение, конъюнкция</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_1 <span style="color: #e4e7af;">||</span> $bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// логическое сложение, дизъюнкция</span>
<span style="color: #008800; font-weight: bold;">echo</span> <span style="color: #ff9c20;">$bool_1 <span style="color: #e4e7af;">or</span> $bool_2</span></span><span style="color: #e4e7af;"> . '&lt;br&gt;'; <span style="color: #888888;">// логическое сложение, дизъюнкция</span>
</pre>
<span style="color: red">?&gt;</span>
<pre style="line-height: 125%;">
    <span style="color: #888888;">&#8725;&#8725; Вывод:</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_1; ?> (истина)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_2; ?> (ложь)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo !$bool_2; ?> (истина)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_1 && $bool_2; ?> (ложь)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_1 and $bool_2; ?> (ложь)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_1 || $bool_2; ?> (истина)</span>
    <span style="color: #888888;">&#8725;&#8725; <?php echo $bool_1 or $bool_2; ?> (истина)</span>
</pre>
</code>
</div>

</div>
