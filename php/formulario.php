<?php


  //Verificando se existe a variavel Submit
  if(isset($_POST['submit']))
  {
    //Teste de retorno de informações ao clicar em submit/enviar

    // print_r('Nome:' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email:' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone:' . $_POST['tel']);
    // print_r('<br>');
    // print_r('Sexo:' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento:' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade:' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado:' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço:' . $_POST['endereco']);

    //Ao clicar em enviar ele inclui o arquivo config.php que faz a conexão com o banco
    include_once('config.php');

    //Define cada parametro para sua respectiva variavel
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];


    //Insert passando as variaveis para seus respectivos campos
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Funcionarios</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(
          to right,
          rgb(20, 147, 220),
          rgb(17, 54, 71)
        );
      }
      .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
        color: white;
      }
      fieldset {
        border: 3px solid dodgerblue;
      }
      legend {
        border: 1px solid dodgerblue;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 8px;
      }
      .inputBox {
        position: relative;
      }
      .inputUser {
        background: none;
        border: none;
        border-bottom: solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
      }
      .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: 0.5s;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput {
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
      }
      #data_nascimento {
        border: none;
        padding: 7px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
      }
      #submit {
        background-image: linear-gradient(
          to right,
          rgb(0, 92, 197),
          rgb(90, 20, 220)
        );
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
      }
      #submit:hover {
        background-image: linear-gradient(
          to right,
          rgb(0, 79, 170),
          rgb(61, 15, 146)
        );
      }
    </style>
  </head>
  <body>
    <div class="box">
      <form action="formulario.php" method="post">
        <fieldset>
          <legend>
            <b> Cadastro de Funcionarios </b>
          </legend>
          <br />
          <div class="inputBox">
            <input
              type="text"
              name="nome"
              id="nome"
              class="inputUser"
              required
            />
            <label for="nome" class="labelInput">Nome completo</label>
          </div>

          <br /><br />

          <div class="inputBox">
            <input
              type="text"
              name="email"
              id="email"
              class="inputUser"
              required
            />
            <label for="email" class="labelInput">Email</label>
          </div>

          <br /><br />

          <div class="inputBox">
            <input type="text" name="tel" id="tel" class="inputUser" required />
            <label for="tel" class="labelInput">Telefone</label>
          </div>

          <p>Sexo:</p>
          <input
            type="radio"
            id="feminino"
            name="genero"
            value="feminino"
            required
          />
          <label for="feminino">Feminino</label>
          <br />
          <input
            type="radio"
            id="masculino"
            name="genero"
            value="masculino"
            required
          />
          <label for="masculino">Masculino</label>
          <br />
          <input type="radio" id="outro" name="genero" value="outro" required />
          <label for="outro">Outro</label>

          <br /><br />

          <label for="data_nascimento"><b>Data de nascimento</b></label>
          <input
            type="date"
            name="data_nascimento"
            id="data_nascimento"
            required
          />

          <br /><br /><br />

          <div class="inputBox">
            <input
              type="text"
              name="cidade"
              id="cidade"
              class="inputUser"
              required
            />
            <label for="cidade" class="labelInput">Cidade</label>
          </div>

          <br /><br />

          <div class="inputBox">
            <input
              type="text"
              name="estado"
              id="estado"
              class="inputUser"
              required
            />
            <label for="estado" class="labelInput">Estado</label>
          </div>

          <br /><br />

          <div class="inputBox">
            <input
              type="text"
              name="endereco"
              id="endereco"
              class="inputUser"
              required
            />
            <label for="endereco" class="labelInput">Endereço</label>
          </div>

          <br /><br />

          <input type="submit" name="submit" id="submit" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
