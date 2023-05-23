<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa</title>
  <link rel="stylesheet" href="/css/app.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="/js/mainMapa.js">
    //Arquivo que contem a api do mapa,juntamente com a suas funcionalidades
  </script>
  <link rel="stylesheet" href="/css/estacionamento.css">
</head>

<body>

  @foreach ($vagas as $vaga) @endforeach

  <!--The div element for the map -->
  <div id="map"></div>

  <!--
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
  <!-- Adicione o modal ao seu HTML -->
  <div class="modal" id="meuModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content quadro">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-titulo"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="modal-vagas"></p>
          <p id="modal-vagas_disponiveis"></p>
          <div id="estacionamento" class="container">
            <div class="row">
              <div class="vagacima col ladoEsquerdo"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col ladoDireito"></div>
            </div>
            <div class="row pb-5">
              <div class="vaga col ladoEsquerdo"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col ladoDireito"></div>
            </div>
            <div class="row pt-5">
              <div class="vagacima col ladoEsquerdo"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col"></div>
              <div class="vagacima col ladoDireito"></div>
            </div>
            <div class="row">
              <div class="vaga col ladoEsquerdo"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col"></div>
              <div class="vaga col ladoDireito"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const localizacoes = [];
    var vagas = @json($vagas);
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key={{config('app.google_key')}}&callback=initMap&v=weekly" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>