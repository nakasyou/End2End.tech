<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>End2End.tech - Anonymous File Uploader</title>
    <meta name="robots" content="All">
    <meta name="description" content="匿名で簡単にファイルをアップロードできます。End2End暗号化対応・ノーログで、安心安全のオープンソースです。">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/js/index.js"></script>
    <link href="/css/index.css" rel="stylesheet">
  </head>
  <body>

    <br>
    <h1 class="text-3xl font-bold" align="center">
      End2End.tech - Anonymous File Uploader
    </h1>
    <br>

    <noscript>
      <div align="center">
        <h1>このページを表示するには、JavaScriptを有効化して下さい。</h1>
      </div>
    </noscript>

    <div id="main" class="main py-6 sm:py-8 lg:py-12">
      <form action="" enctype="multipart/form-data" method="POST" class="mx-auto max-w-screen-2xl px-4 md:px-8" id="uploader">
        <div class="flex flex-col overflow-hidden rounded-lg bg-gray-200 sm:flex-row md:h-80">

          <div class="order-first h-48 w-full bg-gray-300 sm:order-none sm:h-auto sm:w-1/2 lg:w-1/2">
            <br>
            <p>ファイルをアップロードして共有(100MB以内):</p>
            <input name="file" type="file"><br><br>
          </div>

          <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-1/2">
            <div class="sm:col-span-2">
              <input type="checkbox" id="setPassword" name="setPassword">データのE2E暗号化パスワードを設定する<br>
              <span id="setPasswordInput" class="default-remove">
                <label for="passwd" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">パスワード:</label>
                <input name="passwd" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" placeholder="p@ssword" />
              </span>
            </div>
            <div class="sm:col-span-2">
              <input type="checkbox" id="setLimitDownload" name="setLimitDownload">最大ダウンロード回数を設定する<br>
              <span id="setLimitDownloadInput" class="default-remove">
                最大ダウンロード回数(0で無制限):
                <input name="maxDownloadCount" type="number" class="maxDownloadCount border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition focus:ring" value="0" />
              </span>
            </div>
          </div>
        </div>
        <br>
        <div align="center">
          <br>
          <input type="submit" name="submitData" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base" value="利用規約に同意して共有">
        </div>
      </form>
    </div>

  </body>
</html>
