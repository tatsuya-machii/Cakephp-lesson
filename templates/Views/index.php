<!DOCTYPE html>
  <main>
    <div id="index">
      <h2 id="index_txt" class="hidden">index</h2>
    </div>

    <div id="img_container">
      <div id="bg_container">

        <img id="img1" class="hidden" src="../img/views/catchcopy.png" alt="キャッチコピー">
        <img id="img2" class="hidden" src="../img/views/catchcopy2.png" alt="キャッチコピー2">
      </div>
    </div>

    <div class="produce_container">
      <img src="../img/views/title.png" alt="event_total_produce">
      <div id="btn_wrapper">
        <div class="btn_container">
          <img src="../img/views/btn01.png" alt="What's">
          <p>ジョブポップとはこういう会社です。</p>
          <p class="more">more</p>
        </div>
        <div class="btn_container">
          <img src="../img/views/btn02.png" alt="Company">
          <p>会社概要</p>
          <p class="more">more</p>
        </div>
        <div class="btn_container">
          <img src="../img/views/btn03.png" alt="Recruit">
          <p>随時スタッフ募集しています。</p>
          <p class="more">more</p>
        </div>
        <div class="btn_container">
          <img src="../img/views/btn04.png" alt="Q&A">
          <p>よくある質問Q＆A</p>
          <p class="more">more</p>
        </div>
        <div class="btn_container">
          <img src="../img/views/btn05.png" alt="Contact">
          <p>ジョブポップへのお問い合わせ</p>
          <p class="more">more</p>
        </div>
    </div>


    </div>
  </main>

  <script>
    $(function(){
      top_movie("#img1","#img2");
      });

      function top_movie(id1,id2){
        $(id1).fadeIn(2000).delay(5000).fadeOut(2000,function(){top_movie(id2,id1)});
      }
  </script>
