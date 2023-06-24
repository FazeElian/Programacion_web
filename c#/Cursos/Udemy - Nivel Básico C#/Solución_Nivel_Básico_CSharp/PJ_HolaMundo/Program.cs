// Código predeterminado de Visual Studio - Uso de bibliotecas
using System; // Importación de biblioteca para el uso de la consola - Console

namespace PJ_HolaMundo
{
    internal class Program
    {
        // Entorno de trabajo estático
        static void Main(string[] args)
        {

            // Escribir texto con salto de línea
            Console.WriteLine("La suma de 5 + 3 es igual a = ");
            Console.WriteLine(11/2);
            Console.WriteLine(11 % 2);
            Console.WriteLine("Imprimiendo texto en C# usando la Consola");

            // Escribir texto sin salto de línea
            Console.Write("Escribir sin salto de línea");
            Console.Write("Linea2");

            // Va a esperar a que se presione una tecla para cerrar la ventana
            Console.ReadKey();
        }
    }
}