<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="www\assets\imagesICON.ico">
   <title>SAAT - Produtividade</title>
   <!-- Stylesheet -->   
   <link rel="stylesheet" href="style.css">   
</head>
<body class="homepage">
   <noscript>Por favor, habilite o Javascript para ver o conteúdo completo da página</noscript>
   <header>
     <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 150 135" xml:space="preserve"> 
         <g xmlns="http://www.w3.org/2000/svg"><path class="st0" d="M64.6,123c11.5-1,22.6-2.6,32.1-5.2c4.7-1.1,9.5-2.2,13.7-3.7c-4.2,0.5-8.9,1.1-13.1,1.6          c-8.9,1.1-17.3,1.6-26.3,1.6c-8.4,0-16.8-0.5-25.2-1.6c-6.3-0.5-12.6-1.6-18.4-2.6c-3.1-0.5-6.3-1.1-9.5-1.6l0,0l0,0L81.9,2.7          H71.4L2,120.4c16.3,2.6,33.1,3.7,49.4,3.2C55.6,123.6,60.4,123.6,64.6,123z"/><path class="st0" d="M84,3.7L21.5,109.9c3.2,0.5,5.8,1.1,9,1.6C48.3,81.5,66.2,51,84,21.1l57.8,98.3l5.2-9L84,3.7z"/><path class="st0" d="M122.9,111.5c-6.3,3.1-15.2,6.3-25.8,8.4c-10,2.6-20.5,4.2-31.5,5.2c-4.2,0.5-8.9,0.5-13.7,1.1          c-11,0.5-22.6,0-34.7-1.1c4.7,1.1,10,2.1,15.8,2.7c11.5,1.6,24.1,2.6,37.8,2.6c11.6,0,24.2-0.5,36.8-2.6          c10.5-1.1,21.5-3.7,32.5-6.9L84,25.3l-5.3,8.9l44.7,75.7l0.5,1.1L122.9,111.5L122.9,111.5z"/></g>            
    </svg>
     <h2>TRIBUNAL DE JUSTIÇA DO ESTADO DE MINAS GERAIS</h2>
   </header>

   
   <main class="container">
  
    <div id="system-logo"></div>
    <div class="title">ESTATÍSTICA SETOR ATENDIMENTO </div> 
    <span class='result'></span>
    <div class="container">
          <form id="myFormatendimento">
          <div class="row">
            <div class="column">
              <label for="colaboradores">Colaborador:</label>
              <select id="colaboradores" name="colaboradores">
                <option></option>
                <option value="Aline Santos">Aline Santos</option>
<option value="Ana Alice">Ana Alice</option>
<option value="Ana Eduarda">Ana Eduarda</option>
<option value="Ana Luiza">Ana Luiza</option>
<option value="Arthur Lopes">Arthur Lopes</option>
<option value="Bruna Lais">Bruna Lais</option>
<option value="Caroline Lima">Caroline Lima</option>
<option value="César Iala">César Iala</option>
<option value="Cleiton Marcos">Cleiton Marcos</option>
<option value="Emily Ester">Emily Ester</option>
<option value="Ênio Patente">Ênio Patente</option>
<option value="Enzo Allan">Enzo Allan</option>
<option value="Gabriela de Lima">Gabriela de Lima</option>
<option value="Gabriela Neves">Gabriela Neves</option>
<option value="Gabrielle Cristina">Gabrielle Cristina</option>
<option value="Ian Pereira">Ian Pereira</option>
<option value="Isadora Santos">Isadora Santos</option>
<option value="Izadora Genilda">Izadora Genilda</option>
<option value="Janice Fátima">Janice Fátima</option>
<option value="Jenifer Maisa">Jenifer Maisa</option>
<option value="João Vitor">João Vitor</option>
<option value="Josimar Silva">Josimar Silva</option>
<option value="Julia Soares">Julia Soares</option>
<option value="Juliana Costa">Juliana Costa</option>
<option value="Leandra Luisa">Leandra Luisa</option>
<option value="Leonardo Mendes">Leonardo Mendes</option>
<option value="Letícia Ellen">Letícia Ellen</option>
<option value="Luiza Alves">Luiza Alves</option>
<option value="Marco Sanches">Marco Sanches</option>
<option value="Maria Luisa">Maria Luisa</option>
<option value="Maria Luiza">Maria Luiza</option>
<option value="Matheus Augusto">Matheus Augusto</option>
<option value="Matheus Teixeira">Matheus Teixeira</option>
<option value="Rebeca Gonçalves">Rebeca Gonçalves</option>
<option value="Renato Caldas">Renato Caldas</option>
<option value="Renzo de Almeida">Renzo de Almeida</option>
<option value="Roberta Almeida">Roberta Almeida</option>
<option value="Taynná Lorrane">Taynná Lorrane</option>
<option value="Thaís Eduarda">Thaís Eduarda</option>
<option value="Vinícius Martins">Vinícius Martins</option>
<option value="Vitória Gabriela">Vitória Gabriela</option>
<option value="Wladek Henrique">Wladek Henrique</option>
<option value="Yara Pereira">Yara Pereira</option>
<option value="Yasmin Nicoly">Yasmin Nicoly</option>

              </select>
            </div>
            <div class="column">
              <label for="data">Data:</label>
              <input type="date" id="data" name="data" />
            </div>
          </div>
      
          <div class="column">
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" />
           
            <label for="cpfCnpj">CPF/CNPJ:</label>
            <input type="text" id="cpfCnpj" name="cpfCnpj" />
  
            <label for="reu">Réu:</label>
            <input type="text" id="reu" name="reu" />

            <label for="rcpfCnpj">CPF/CNPJ:</label>
            <input type="text" id="rcpfCnpj" name="rcpfCnpj" />

                      
          </div>
  
          <div class="column">
            <p><strong>Manisfetação Juntada?</strong></p>
            
            <div class="radio-group">
                <div class="radio">
                  <label for="sim" class="sim-label">Sim</label>
                  <input type="radio" id="sim" name="opcao" value="sim" />
                </div>
              
                <div class="radio">
                  <label for="nao" class="nao-label">Não</label>
                  <input type="radio" id="nao" name="opcao" value="nao" />
                </div>
              </div>
              
                  <br>
  
            <label for="numero">Número ID:</label>
            <input type="text" id="numero" name="numero"/>
  
            <label for="motivo">Motivo:</label>
            <select id="motivo" name="motivo">
              <option value="motivo 1"></option>
              <option value="Informação">Informação</option>
              <option value="Instabilidade PJE">Instabilidade PJE</option>
            </select>
          </div>
  
          <button type="submit">Enviar</button>
        </form>
      </div>
      
      <!-- <script src="lib/js/javascript.js"></script> -->
      <script src="lib/js/vanilla-masker-master/lib/vanilla-masker.js"></script>
      <script src="scriptatendimento.js"></script>
    
       
        
    </main>   
    <footer class="page-footer">
        <div class="footer-contato">
          <strong>Contatos</strong>
          <div class="field-contatos">
            <a href="https://api.whatsapp.com/send?phone=553132899366" target="_blank"><strong>
                Telefone: </strong> (31) 3289-9366
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 48 48">
                <path fill="#fff"
                  d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                </path>
                <path fill="#fff"
                  d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                </path>
                <path fill="#cfd8dc"
                  d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                </path>
                <path fill="#40c351"
                  d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                </path>
                <path fill="#fff" fill-rule="evenodd"
                  d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="mailto:saat.jespufs@tjmg.jus.br" target="_blank"><strong>E-mail: </strong>saat.jespufs@tjmg.jus.br
              <span class="material-symbols-rounded">mail</span>
            </a>
          </div>
        </div>
        © Copyright - E.L.M.P
      </footer>

    
</body>
</html>