
@extends('common.layout')

@section('index')
<main class="main">

        <div class="wrap">
          <div class="page-title">
            <h2>ブログ当番</h2>
          </div>
          <section>
              <div class="bloger-title">
                    <div class="main-bloger">今日の当番は</div>
                  <div class="main-bloger">〇〇　太郎</div>
              </div>
              <div class="bloger__button__wrap">
                    <div class="bloger__button">パス</div>
                    <div class="bloger__button">書きました</div>
              </div>
              <div class="bloger-next">
                <div class="bloger-item">
                    <div class="content__title">late</div>
                    <table>
                        <tr>
                            <td>〇〇　hanako</td>
                            <td class="image">image</td>
                        </tr>
                        <tr>
                            <td>〇〇　zikou</td>
                            <td class="image">image</td>
                        </tr>
                        <tr>
                            <td>〇〇　太郎</td>
                            <td class="image">image</td>
                        </tr>
                    </table>
                    <div class="content"></div>
                </div>
                <div class="bloger-item">
                    <div class="content__title">NEXT</div>
                    <table>
                        <tr>
                            <td>〇〇　hanako</td>
                            <td class="image">image</td>
                        </tr>
                        <tr>
                            <td>〇〇　zikou</td>
                            <td class="image">image</td>
                        </tr>
                        <tr>
                            <td>〇〇　太郎</td>
                            <td class="image">image</td>
                        </tr>
                    </table>
                    <div class="content"></div>
                </div>
              </div>
          </section>
        </div>
@endsection
