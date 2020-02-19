/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package street.fighter.java;

/**
 *
 * @author Fernando
 */
public class Lutadores {

    private String nome;
    private String idade;
    private String Nacionalidade;
    private int Vitorias;
    private int Derrotas;
    private int Empates;

    public void Lutar() {

    }

    /**
     * @return the nome
     */
    public String getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(String nome) {
        this.nome = nome;
    }

    /**
     * @return the idade
     */
    public String getIdade() {
        return idade;
    }

    /**
     * @param idade the idade to set
     */
    public void setIdade(String idade) {
        this.idade = idade;
    }

    /**
     * @return the Nacionalidade
     */
    public String getNacionalidade() {
        return Nacionalidade;
    }

    /**
     * @param Nacionalidade the Nacionalidade to set
     */
    public void setNacionalidade(String Nacionalidade) {
        this.Nacionalidade = Nacionalidade;
    }

    /**
     * @return the Vitorias
     */
    public int getVitorias() {
        return Vitorias;
    }

    /**
     * @param Vitorias the Vitorias to set
     */
    public void setVitorias(int Vitorias) {
        this.Vitorias = Vitorias;
    }

    /**
     * @return the Derrotas
     */
    public int getDerrotas() {
        return Derrotas;
    }

    /**
     * @param Derrotas the Derrotas to set
     */
    public void setDerrotas(int Derrotas) {
        this.Derrotas = Derrotas;
    }

    /**
     * @return the Empates
     */
    public int getEmpates() {
        return Empates;
    }

    /**
     * @param Empates the Empates to set
     */
    public void setEmpates(int Empates) {
        this.Empates = Empates;
    }

}
