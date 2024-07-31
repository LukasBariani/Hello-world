package com.mycompany.atividade1;

import javax.swing.JOptionPane;

public class Atividade1 {

    public static void main(String[] args) {
        
        double nota1 = 0, nota2 = 0, nota3 = 0, nota4 = 0, nota5 = 0, media = 0;
        //Declarando todas as variaveis que eu irei usar
        
        
        nota1 = Double.parseDouble(JOptionPane.showInputDialog("Digite a 1ª nota"));
       
        nota2 = Double.parseDouble(JOptionPane.showInputDialog("Digite a 2ª nota"));
        
        nota3 = Double.parseDouble(JOptionPane.showInputDialog("Digite a 3ª nota"));
        
        nota4 = Double.parseDouble(JOptionPane.showInputDialog("Digite a 4ª nota"));
        
        nota5 = Double.parseDouble(JOptionPane.showInputDialog("Digite a 5ª nota"));
        //esse bloco de comandos pergunta cada nota para o usuario 

        
        media = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;
        //essse comando faz a media de todas as notas
        
        if (media > 5) {
           
            JOptionPane.showMessageDialog(null, "O aluno foi aprovado com média: " + media);
        } else {
           
            JOptionPane.showMessageDialog(null, "O aluno não foi aprovado. Média: " +media);
        }
        //esse bloco de if e else verifica se a media fora maior q 5 o aluno foi aprovado emostrando na tela 
    }
}