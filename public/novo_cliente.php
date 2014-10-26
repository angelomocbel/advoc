<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    require_once '../src/database/Database.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <link href="../css/geral.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="geral">
            <div id="topo">
                <div id="menu">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Presencial</a></li>
                        <li><a href="">In Company</a></li>
                        <li><a href="">Online</a></li>
                        <li><a href="">Eventos</a></li>
                    </ul>

                </div>
            </div>
            <div id="conteudo">
                <form name="novocliente" method="POST">

                    <!--        FORMULÁRIO DADOS DE IDENTIFICAÇÃO-->
                    <fieldset><legend>Identificação</legend>
                        <table>
                            <tr>
                                <td colspan="2">Nome:</td>
                                <td>RG:</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="nome" value="" size="60" /></td>
                                <td><input type="text" name="rg" value="" size="15" /></td>
                            </tr>
                            <tr>
                                <td>CPF:</td>
                                <td>Data de Nascimento:</td>
                                <td>Estado Civil:</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="cpf" value="" size="20" /></td>
                                <td><input type="date" name="nascimento" value="" size="8" /></td>
                                <td><select name="estadocivil" >

                                        <option disabled="" selected="">Selecione...</option>
                                        <option>SOLTEIRO</option>
                                        <option>CASADO</option>
                                        <option>VIÚVO</option>
                                    </select></td>
                            </tr>

                        </table>
                    </fieldset> 

                    <!--FORMULÁRIO DADOS DE LOCALIZAÇÃO-->
                    <fieldset><legend>Localização</legend>
                        <table>
                            <tr>
                                <td>Endereço:</td>
                                <td>Bairro:</td>
                            </tr>
                            <tr>
                                <td ><input type="text" name="endereco" value="" size="60" /></td>
                                <td><input type="text" name="rua" value="" size="15" /></td>
                            </tr>
                            <tr>
                                <td>Cidade:</td>
                                <td>Estado:</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="cidade" value="" size="20" /></td>
                                <td><select name="estado" >
                                        <?php
                                        $db = new Database();
                                        $resultado = $db->realizar("SELECT * FROM estados;");
                                        foreach ($resultado as $r) {
                                            $sigla = $r['sigla'];
                                            $nome = $r['nome'];
                                            echo "<option title='$nome'>$sigla</option>";
                                        }
                                        ?>
                                    </select></td>
                            </tr>

                        </table>
                    </fieldset>
                    <!--FORMULÁRIO DADOS DE CONTATO-->
                    <fieldset><legend>Contato</legend>
                        <table>
                            <tr>
                                <td>Telefone:</td>
                                <td>Celular:</td>
                            </tr>
                            <tr>
                                <td ><input type="text" name="telefone" value="" size="20" /></td>
                                <td><input type="text" name="celular" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td>Observações:</td>
                            </tr>
                            <tr>
                                <td><input type="email" name="email" value="" size="20" /></td>
                                <td><textarea name="obs" rows="6" cols="30">
                                    </textarea>
                                </td>
                            </tr>

                        </table>
                    </fieldset>
                    <div class="div_botoes">
                        <hr/>
                        <input type="submit" class="botao" value="Salvar" name="save" />
                        <input type="reset" class="botao" value="Limpar" name="limpar" />
                    </div>
                </form>
            </div>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
