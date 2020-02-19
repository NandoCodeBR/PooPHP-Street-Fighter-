
package street.fighter.java;

import static jdk.nashorn.internal.objects.NativeFunction.function;

/**
 *
 * @author Fernando
 */
public class Luta {
    private String desafiado;
    private String desafiante;

    /**
     * @return the desafiado
     */
    public String getDesafiado() {
        return desafiado;
    }

    /**
     * @param desafiado the desafiado to set
     */
    public void setDesafiado(String desafiado) {
        this.desafiado = desafiado;
    }

    /**
     * @return the desafiante
     */
    public String getDesafiante() {
        return desafiante;
    }

    /**
     * @param desafiante the desafiante to set
     */
    public void setDesafiante(String desafiante) {
        this.desafiante = desafiante;
    }
    
    public String InicioLuta(String nome1,String nome2){
        return "Senhoras e senhores, apenas um sairá vivo... "+ nome1+ "VS" +nome2 +"QUE COMECE A LUTA!";
    }
}

