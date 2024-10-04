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
    public partial class Form2 : Form
    {

        SqlConnection conexion = new SqlConnection("Data Source=DESKTOP-8M4NRU1;Initial Catalog=BDEdwin;Integrated Security=True");
        public Form2(String usu, String con)
        {
            InitializeComponent();
            conexion.Open();
            String consulta = @"SELECT xc.id_catastro,xpp.id_propietario,xc.codigo_catastral,xc.superficie,xc.distrito,xc.zona,XPP.ci,xpp.nombre,xpp.paterno,xpp.telefono 
                                FROM CATASTRO XC, POSEE XP, PROPIETARIO XPP 
                                WHERE XC.id_catastro=XP.id_catastro 
                                AND xp.id_propietario=xpp.id_propietario
                                AND xpp.contrasena='" + con + "' AND xpp.nombre='" + usu + "'";
            SqlDataAdapter adaptador = new SqlDataAdapter(consulta, conexion);
            DataTable dt = new DataTable();
            adaptador.Fill(dt);
            dataGridView1.DataSource = dt;
            conexion.Close();
        }



        private void button10_Click(object sender, EventArgs e)
        {
            login form = new login();
            form.Show();
            this.Hide();
        }
    }
}
