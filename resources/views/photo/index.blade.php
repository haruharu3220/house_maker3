<!-- resources/views/tweet/index.blade.php -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>イエつく！！</title>
    
    <!-- Select2.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <!-- jquery & iScroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Select2本体 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
  
  <x-app-layout>

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tweet Index') }}
      </h2>
    </x-slot>
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
            <table class="text-center w-full border-collapse">
              <thead>
                <tr>
                  <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">tweet</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($photos as $photo)
                <tr class="hover:bg-gray-lighter">
                  <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                    <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{$photo->image}}</h3>
                    <img src="{{ asset('storage/image/'.$photo->image)}}"　class="mx-auto" style="height:300px;">
                    <div class="flex">
                      <!-- 更新ボタン -->
                      <!-- 削除ボタン -->
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      
      
    <ul class="sort-btn"> 
      <li>
        <dl>
          <dt>All</dt>
          <dd>
            <ul>
              <li class="all active">全て</li>
            </ul>
          </dd>
        </dl>
      </li>
      <li>
        <dl>
          <dt>Color</dt>
          <dd>
            <ul>
              <li class="color01">Color1</li>
              <li class="color02">Color2</li>
              <li class="color03">Color3</li> 
            </ul>
          </dd>
        </dl>
      </li>
      <li>
        <dl>
          <dt>Category</dt>
          <dd>
            <ul>
              <li class="cat01">カテゴリ1</li>
              <li class="cat02">カテゴリ2</li>
              <li class="cat03">カテゴリ3</li> 
            </ul>
          </dd>
        </dl>
      </li>
  <!--/sort-btn--></ul>
  
  <ul class="grid"><!--1番外側のタグにgrid というクラス名を付与。-->
    @foreach ($photos as $photo)
      <!--itemというクラス名と並び替え基準となる複数のクラス名（チェックボックスのクラス名と同じ名前）を付与。-->
    <li class="item {{$photo->image}} {{$photo->id}}">
        <!--内側のdivには高さを維持するためにitem-contentというクラス名をつける。-->
      <div class="item-content">
          <tr class="hover:bg-gray-lighter">  
            <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
              <img src="{{ asset('storage/image/'.$photo->image)}}" class="modal-trigger mx-auto" >
            </td>
          </tr>
      </div>
    </li>
    @endforeach
  </ul>

<!--        <div class="item-content"><!--内側のdivには高さを維持するためにitem-contentというクラス名をつける。-->
<!--          <a href="img/01.jpg" data-fancybox="group1" data-caption="グループ1キャプション">-->
<!--            <img src="img/01.jpg" alt="">-->
<!--          </a><!--複数画像をグループ化してサムネイル表示させたい場合は、datafancybox="半角英数字で同一のグループ名"、キャプションを入れたい場合はdata-caption="キャプションタイトル"を設定する。-->



<!-->-->
<!--      <li class="item cat01 cat02 color01">-->
<!--        <div class="item-content">-->
<!--          <a href="img/02.jpg" data-fancybox="group2" data-caption="グループ2キャプション">-->
<!--            <img src="img/02.jpg" alt="">-->
<!--          </a>-->
<!--        </div>-->
<!--      </li>-->
<!--      <li class="item cat03 color02">-->
<!--        <div class="item-content">-->
<!--          <a href="img/03.jpg" data-fancybox="group3" data-caption="グループ3キャプション">-->
<!--            <img src="img/03.jpg" alt="">-->
<!--          </a>-->
<!--        </div>-->
<!--      </li>-->
<!--    </ul>-->

<!-- モーダルウィンドウ -->
<div class="modal-wrapper">
  <div id="modal">
    <div class="modal-content">
      <img src="" alt="">
    </div>
    <div class="modal-close">×</div>
  </div>
</div>

  </x-app-layout> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
  <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>  <!--自作のJS-->
  <script src="{{ asset('js/test.js') }}"></script>

    

