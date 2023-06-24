using System;

namespace DatosPrimitivos
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Definir tipo de dato de variable edad
            int edad;
            string nombre;
            double sueldo;
            bool casado;

            edad = 14;
            nombre = "Elian Ibarra";
            sueldo = 3500.55;
            casado = false;

            Console.WriteLine("Hola, Mi nombre es: " + nombre + " Y tengo " + edad + " años" + " Y mi sueldo actual es de " + sueldo + " dólares");
            Console.WriteLine("");
            Console.WriteLine("Me encuentro casado?: " + casado);

            Console.ReadKey();
        }
    }
}