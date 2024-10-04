using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace WindowsFormsMiBD
{
    public partial class login : Form
    {
        SqlConnection conexion = new SqlConnection("Data Source=DESKTOP-8M4NRU1;Initial Catalog=BDEdwin;Integrated Security=True");
        public login()
        {
            InitializeComponent();
        }

        private void login_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            conexion.Open();
            String usuario = textBox1.Text;
            String contra = textBox2.Text;


            if (usuario == "admin" && contra == "admin")
            {
                Form1 form = new Form1();
                form.Show();
                this.Hide();
            }
            else
            {
                String consulta = @"SELECT COUNT(*) 
                                    FROM PROPIETARIO 
                                    WHERE contrasena=@contra AND nombre=@usuario";
                SqlCommand comando = new SqlCommand(consulta, conexion);
                comando.Parameters.AddWithValue("@contra", contra);
                comando.Parameters.AddWithValue("@usuario", usuario);

                int count = (int)comando.ExecuteScalar();
                if (count > 0)
                {
                    Form2 form2 = new Form2(usuario,contra);
                    form2.Show(); 
                    this.Hide(); 
                }
                else
                {
                    MessageBox.Show("Contraseña Incorrecta");
                }
            }

            conexion.Close();
        }


    }
}
