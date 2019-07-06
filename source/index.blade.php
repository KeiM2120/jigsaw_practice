@extends('_layouts.master')
@extends('_layouts.header')


@section('body')

<h1>Hello!! This is my portforio</h1>

<p>Using blade templates.</p>
But I don't know how to make HTML/CSS

<div class="class1">This is Class 1 area . </div>
<div class="class2">This is Class 2 area . </div>
<div class="introduce">
    <div class="likes">
        <h4>LIKES</h4>
        <ul>
            <li>ハンバーガー</li>
            <li>ゲーム(多種)</li>
            <li>音楽(SoundCloudを利用)</li>
        </ul>
    </div>

    <div class="skill">
        <h4>SKILLS</h4>
        <ul>
            <li>java : 大学の授業にて利用 </li>
            <li>PHP : ダイスロールアプリを作りたくて触り始める</li>
            <li>Python : webスクレイプにて使用。AtCoderで利用中</li>
        </ul>
        <h4> LEARNING </h4>
        <ul>
            <li>Laravel : PHPおよびフレームワークの学習のため選択</li>
            <li>Scala : 表現力、可読性、実行速度に惹かれて学び始める</li>
        </ul>

</div>

@endsection
