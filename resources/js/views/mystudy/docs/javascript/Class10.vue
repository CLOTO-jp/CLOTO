<template>
  <v-container fluid id="content">
    <div class="white--text text-center mb-12 py-8" id="title">
      <h1 class="text-h4 my-4">プログラミングで「伝える」コース</h1>
      <h1 class="text-h4 my-4">{{ title }}</h1>
    </div>

    <p>
      Class7~Class9で「伝えたいこと」を伝えるためのWeb制作をしてきました。<br />
      プロジェクトの軸を立て、デザインをワイヤーフレームに落とし込み、<br />
      実際にコーディングし、インターネット上に公開しました。<br />
    </p>

    <p>
      ここまででWeb制作の過程は完了ですが、CLOTOでは「玄人」になるためにもう１段階、<br />
      Webサイトをブラッシュアップすること、その姿勢も学習していきましょう。あと少しです！
    </p>

    <ul id="agenda">
      <li>0-0　Class10</li>
      <li>1-0　ブラッシュアップのすゝめ</li>
      <li>1-1　自己添削</li>
      <li>1-2　他者からの批評</li>
      <li>1-3　検討</li>
      <li>1-4　いいものはどんどん盗め</li>
      <li>2-0　具体的なワンアップポイント</li>
      <li>2-1　レスポンシブ対応はしたか</li>
      <li>2-2　SEOとは</li>
      <li>2-3　分析ツールの埋め込み</li>
    </ul>

    <h2 class="text-h4 font-weight-bold">
      <span> ブラッシュアップのすゝめ </span>
    </h2>
    <v-container fluid>
      <p>
        ここまで「伝えたいことを」伝えるためのWebサイト制作をしてきました。<br />
        ここでもう一度思い出して欲しいのはWeb制作の目標はコーディングではないということです。<br />
        インターネット上に公開することでもありません。<br />
        「伝えたいこと」が伝えたい相手にしっかりと伝わることです。
      </p>

      <p>
        ここまで何度も何度も伝えてきました。ここでもう一度Class0の初心に戻りましょう。<br />
        プログラミング学習は肩書きが変わっても続くものです。プログラミング独学の素人が苦労人を経て玄人へ。<br />
        そしてフリーランスエンジニアや企業で働くエンジニア、起業家、SIer。<br />
        どの道へ進んでも、プログラミングに携わる以上、学習は続きます。
      </p>

      <p>
        [プログラミングで「伝える」コース　JavaScriptを軸に学ぶロード]もいよいよClass10を以って修了となります。<br />
        常に「より良いもの」を目指し、生涯価値を創造し続けることができる人間になるためにあと少し、<br />
        自作のWebサイトをブラッシュアップしましょう。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> 自己添削 </span>
    </h2>
    <v-container fluid>
      <p>
        まずは自己添削からいきましょう。具体的なポイントは後述します。自己添削で重要なことは「俯瞰する」ことです。<br />
        特にこのコースでは「伝える」ことができるという価値の習得を目指しています。<br />
        つまり価値のあるWebサイトは、「伝わる」ものであるべきです。
      </p>

      <p>
        しかし、同じ「伝わる」でも、よく目を凝らしたり、<br />
        内容を理解するのに時間がかかってしまうものは価値が低いものということになってしまいます。<br />
        実際にこのようなWebサイトはいいサイトではありません。
      </p>

      <p>
        見る者の興味を瞬時に惹きつけ、共感を与え、何か行動にうつさせる。<br />
        これが重要です。そのためには、第一印象が全てです。<br />
        URLを踏んで、Webサイトを表示した瞬間、読みたくなるか否か。これに限ります。
      </p>

      <p>
        これが実現されているか否かを自己添削する方法は至ってシンプルです。「俯瞰する」ことです。<br />
        「俯瞰」とは高い位置から全体を見下ろすことです。ここではあえて客観視ではなく「俯瞰」が最適な言葉でしょう。<br />
        どういうことかというと、これは例えでもなんでもなく、物理的に俯瞰して欲しいからです。<br />
        一度ディスプレイから２mほど離れて表示されている画面全体を見ましょう。
      </p>

      <p>
        どんな情報が飛び込んできましたか？どんな印象を受けましたか？<br />
        あなたはWeb制作をした本人なのでそのサイトの内容をよく理解しているし、愛着もあるはずです。<br />
        しかし俯瞰してみた場合、これまでのイメージとはほぼ確実に違う見え方をするはずです。<br />
        文字が見にくい。フォントがおかしい。色の調和が取れていない。<br />
        なんかごちゃごちゃして一番重要なポイントがわからない。なんか暗い。など。
      </p>

      <p>
        １〜２m離れた程度で「伝えたいこと」と異なる情報や印象が飛び込んでくるWebサイトは「失敗作」です。<br />
        ここは厳しく自分に向き合いましょう。Class9で既に公開を終えているから完了ではありません。<br />
        むしろ公開してしまっているからこそ早急に修正しなくてはなりません。<br />
        俯瞰して厳しい自己添削しましょう。より良いものを目指しましょう。
      </p>

      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> 他者からの評価 </span>
    </h2>
    <v-container fluid>
      <p>
        俯瞰による自己添削にも限界はあります。より良いものを目指すために他者の視点を借りましょう。
      </p>

      <p>
        そもそもWebサイトは作成者以外に向けられたものですので他者に正確に伝わらなければ意味がありません。<br />
        Class9でURLの発行が済んでいるはずです。<br />
        プロフィールに成果物として記載したり、カルテ、タイムラインで公開し、レビューを求めましょう。<br />
        褒めてもらえることも多くモチベーションが上がる一方で辛辣な評価や、<br />
        的確すぎるアドバイスをもらえることもあるでしょう。<br />
        そのような時は「これこそ成長機会だ」と、「自分自身では学べなかったことを学ばせていただいた」と心から感謝しましょう。
      </p>

      <p class="font-weight-bolder">
        CLOTOはプログラミング独学者の聖地です。みんな学習過程です。<br />
        他者からの批評を受けることは恥ではありません。むしろそのためにCLOTOを利用しているようなものなのです。
      </p>

      <p>
        門外漢ではなく、同じプログラミング学習者から自分のプロダクトについて、<br />
        「素材とテーマがミスマッチでは」「ボタンの位置がわかりづらい」「素材データが大きすぎるのか、スムーズに挙動しない」「これはルール違反なのでは」などの率直な指摘をいただけることは日常生活においてほぼありません。<br />
        お互いに忌憚なく適切に評価しあい、高め合いましょう。<br />
        この上なく貴重な学習機会になりますよ！
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> 検討 </span>
    </h2>
    <v-container fluid>
      <p>
        自己添削と、他者からの評価によって自分のプロダクトに修正を加える必要があると感じた時は、<br />
        一度冷静に検討をしましょう。
      </p>

      <p>
        特に他者からのアドバイスによって修正を加える際、その評価が主観的な場合や、自分がこだわった独自の表現の場合です。<br />
        こういった場合は安易に鵜呑みにすることが必ずしも正義ではありません。もちろんはなから突っぱねる行為は愚かです。<br />
        他者の評価を受け入れながらも、自分の軸は強く持ちましょう。
      </p>

      <p>
        自分の価値観、創造性に明らかに反したプロダクトを創ってもそれはあなた本来の価値を発揮できていない可能性があります。<br />
        最初は荒削りでも、その異端性が価値になることもあるからです。<br />
        しっかりと他者からの評価を受け入れ、検討し、自分の意思で決定を下していくことで成長していきましょう。
      </p>

      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> いいものはどんどん盗め </span>
    </h2>
    <v-container fluid>
      <p>
        自分のプロダクトを通じて学ぶだけに終始してはいけません。他の学習者や世の中から常に貪欲に学び続けましょう。<br />
        タイムラインに流れてくるカルテや投稿。他の学習者のプロフィールや「いま取り組んでいること」。<br />
        これらの中で自分が知らないこと。興味があること。気に入ったデザイン。アイデア。<br />
        これらはすぐに調べて自分のものにしていきましょう。必要があれば、本人にコンタクトを取ることもいいでしょう。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> 具体的なワンアップポイント </span>
    </h2>
    <v-container fluid>
      <p>
        ここまでより良いものを目指す、心構えや姿勢について学習しましたが、<br />
        最後にWebサイトの価値を上げる三つのワンアップポイントを簡単に記します。<br />
        もしまだ対応していないものがあれば、ぜひ修了する前に取り組んでみてください。あと一歩。頑張りましょう！
      </p>

      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> レスポンシブ対応はしたか </span>
    </h2>
    <v-container fluid>
      <p>
        Class7で触れたように、様々なディスプレイサイズのデバイスからWebブラウジングされるようになった今日では、<br />
        それぞれのディスプレイサイズに応じたWebデザインが求められます。<br />
        これに対応するデザインをレスポンシブWebデザインと言います。
      </p>

      <p>
        CSSやフレームワークを駆使することで簡単に対応させることもできます。<br />
        まだ取り組んでいない方は、ぜひ取り組んでみてください。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> SEOとは </span>
    </h2>
    <v-container fluid>
      <p>
        これまでも少し触れてきましたが、SEOとはSearch Engine
        Optimizationの略で「検索エンジン最適化」と言います。<br />
        これはWebブラウザの検索エンジンのオーガニックな検索結果において特定のWebサイトが検索結果の上位に表示されるよう、<br />
        検索エンジンのアルゴリズムを逆利用するべくWebサイトの構成などを調整することです。<br />
        難しくなりましたが、要は検索結果上位にWebサイトを表示させるための取り組みのことです。
      </p>

      <p>
        Webサイトは「伝えたいこと」があるから作られるわけで、<br />
        少しでも露出を増やし、多くの人に見てもらうことを目的に作られることが多いです。<br />
        特にWebを利用したデジタルマーケティングの現場では、このSEOが非常に重要視されています。
      </p>

      <p>
        検索エンジンのアルゴリズムは公開されていないものも多いので、公式から出たわけではない情報がほとんどです。<br />
        しかしこれまでに多くのマーケティング担当者やエンジニアが、<br />
        さまざまな施策を行う中で得られた知識が蓄積されて、ある程度の共通認識が作り上げられている状況もあります。<br />
        試しにGoogle ChromeのSEOの方法を検索してみましょう。
      </p>

      <p>
        もし今回のWeb制作で必要なくても、SEOのノウハウは非常に重宝されるので、<br />
        調べたり、試験的に実装してみることをお勧めします。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span> 分析ツールの埋め込み </span>
    </h2>
    <v-container fluid>
      <p>
        「伝える」ことが目的のWebサイトにおいて、そのWebサイトが本当に価値を発揮しているのか、<br />
        定量的に確認することも重要です。さまざまな分析ツールがあります。
        1日何人が訪問し、そのうちどれほどがしっかりと閲覧しているか。何分間Webサイト上にるのか。<br />
        直帰率はどれくらいか。それらの推移はどうなっているか。などを分析してくれるツールもあります。
      </p>

      <p>
        GoogleAnalyticsというサービスはその代表と言えるでしょう。<br />
        また一風変わったものにヒートマップという分析ツールもあります。<br />
        これは閲覧者のカーソルや指の動きなどを元に、ページのどの辺までみられているか。<br />
        どこに興味を示しているかなどの度合いをサーモグラフィーのように色分けで視覚的に示してくれるものです。<br />
        こちらもWeb制作者には必須のツールと言えますので、導入しておきましょう。
      </p>
    </v-container>

    <v-row justify="center" class="mb-4">
      <v-btn dark color="primary" @click="$emit('next')">完了（次へ進む）</v-btn>
    </v-row>
  </v-container>
</template>

<script>
export default {
  head: {
    title() {
      return {
        inner: this.title,
      };
    },
  },
  data() {
    return {
      title: 'Class 10', // コンテンツタイトル
      filePath: this.$docs(this.$route.params.roadName, 'class' + Number(this.$route.params.class)), // コンテンツデータのパス
    };
  },
};
</script>
