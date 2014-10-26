<?php
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", "");
    define("BANCO", "advoc");
class Database {
    protected $conexao = null;

    public function __construct() {
        $this->conectar();
    }
    
    public function __destruct() {
        $this->desconectar();
    }
    /* public function conectar(){
      if(!mysql_connect($this->servidor, $this->usuario, $this->senha)){
      print("Erro de Conexão");
      return -1;
      }
      if(!mysql_select_db($this->banco_de_dados)){
      $this->realizar("CREATE DATABASE $this->banco_de_dados ;");
      if(!mysql_select_db($this->banco_de_dados)){
      print("Erro de direito de usuário");
      return -2;
      }
      }
      return 0;
      } */

    public function conectar() {
        $this->conexao = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
        if (mysqli_connect_errno()) {
            echo "Não foi possível conectar-se ao banco de dados: " . mysqli_connect_error();
        }
        $this->conexao->query("SET NAMES 'utf8'");
        $this->conexao->query('SET character_set_connection=utf8');
        $this->conexao->query('SET character_set_client=utf8');
        $this->conexao->query('SET character_set_results=utf8');
    }

    public function desconectar() {
        $this->conexao->close();
    }

    public function realizar($pedido) {
        return $this->converter_resultado_tabela($this->conexao->query($pedido));
    }
    private function converter_resultado_tabela($resultado) {
        $tabela = array();
        $n = 0;

        if (!strcmp(gettype($resultado), "boolean")) {
            return $resultado;
        }
        while ($linha = $resultado->fetch_assoc()) {
            $linha_tabela = array();
            $c = 0;
            while ($c < $resultado->field_count) {
                $campo = $resultado->fetch_field_direct($c);
                $linha_tabela[$campo->name] = $linha[$campo->name];
                $c++;
            }
            $tabela[$n] = $linha_tabela;
            $n++;
        }
        return $tabela;
    }
}
