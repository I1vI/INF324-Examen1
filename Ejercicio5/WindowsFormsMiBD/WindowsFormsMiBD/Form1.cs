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
    public partial class Form1 : Form
    {
        SqlConnection conexion = new SqlConnection("Data Source=DESKTOP-8M4NRU1;Initial Catalog=BDEdwin;Integrated Security=True");
        int iii = 0;
        public Form1()
        {
            InitializeComponent();
            LlenarTablaPropietario();
            iii = 0;
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        public void LlenarTablaPropietario()
        {
            String consulta ="SELECT * FROM PROPIETARIO";
            SqlDataAdapter adaptador = new SqlDataAdapter(consulta,conexion);
            DataTable dt = new DataTable();
            adaptador.Fill(dt);
            dataGridView1.DataSource=dt;
            vaciar();
            iii = 0;
        }

        public void LlenarTablaCatastro()
        {
            String consulta = "SELECT * FROM CATASTRO";
            SqlDataAdapter adaptador = new SqlDataAdapter(consulta, conexion);
            DataTable dt = new DataTable();
            adaptador.Fill(dt);
            dataGridView1.DataSource = dt;
            vaciar();
            iii = 1;
        }

        public void LlenarTablaPosee()
        {
            String consulta = @"SELECT xc.id_catastro,xpp.id_propietario,xc.codigo_catastral,xc.superficie,xc.distrito,xc.zona,XPP.ci,xpp.nombre,xpp.paterno,xpp.telefono 
                                FROM CATASTRO XC, POSEE XP, PROPIETARIO XPP 
                                WHERE XC.id_catastro=XP.id_catastro 
                                AND xp.id_propietario=xpp.id_propietario";
            SqlDataAdapter adaptador = new SqlDataAdapter(consulta, conexion);
            DataTable dt = new DataTable();
            adaptador.Fill(dt);
            dataGridView1.DataSource = dt;
            vaciar();
            iii = 2;
        }

        public void vaciar() 
        {
            textBox1.Clear();
            textBox2.Clear();
            textBox3.Clear();
            textBox4.Clear();
            textBox5.Clear();
            textBox6.Clear();
            textBox7.Clear();
            textBox8.Clear();
            textBox12.Clear();
            textBox13.Clear();
            textBox14.Clear();
            textBox15.Clear();
            textBox16.Clear();
            textBox17.Clear();
            textBox18.Clear();
            textBox19.Clear();
            textBox20.Clear();
            textBox21.Clear();
            textBox22.Clear();
        }
        
        private void button3_Click(object sender, EventArgs e)
        {

            conexion.Open();

            string consulta = "INSERT INTO PROPIETARIO (ci, nombre, paterno, materno, sexo, fecha_nacimiento, telefono, contrasena) VALUES ('" +
                              textBox1.Text + "', '" +
                              textBox2.Text + "', '" +
                              textBox3.Text + "', '" +
                              textBox4.Text + "', '" +
                              textBox5.Text + "', '" +
                              textBox14.Text + "', '" +
                              textBox13.Text + "', '" +
                              textBox1.Text + "');";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            comando.ExecuteNonQuery();
            MessageBox.Show("Propietario agregado correctamente");

            conexion.Close();
            LlenarTablaPropietario();
            vaciar();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            
            conexion.Open();
            String consulta = "DELETE FROM PROPIETARIO WHERE id_propietario="+textBox15.Text+";";
            SqlCommand comando = new SqlCommand(consulta,conexion);
            int con =comando.ExecuteNonQuery();
            if (con > 0)
            {
                MessageBox.Show(" Propietario Eliminado Correctamente");
            }
            else {
                MessageBox.Show(" No se Elimino Ningun Propietario ");
            }
            conexion.Close();
            LlenarTablaPropietario();
            vaciar();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            conexion.Open();

            String consulta = "UPDATE PROPIETARIO SET ci = '" + textBox1.Text + "', nombre = '" + textBox2.Text + "', paterno = '" + textBox3.Text + "', materno = '" + textBox4.Text + "', sexo = '" + textBox5.Text + "', fecha_nacimiento = '" + textBox14.Text + "', telefono = " + textBox13.Text + ", contrasena = '" + textBox1.Text + "' WHERE id_propietario = " + textBox15.Text + ";";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int con = comando.ExecuteNonQuery();

            if (con > 0)
            {
                MessageBox.Show("Propietario Modificado");
            }
            else
            {
                MessageBox.Show("No se encontró al Propietario");
            }
            conexion.Close();
            LlenarTablaPropietario();
            vaciar();

        }
        private void dataGridView1_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            
            if (iii == 0) 
            {
                var cellValue1 = dataGridView1.Rows[e.RowIndex].Cells[0].Value;
                var cellValue2 = dataGridView1.Rows[e.RowIndex].Cells[1].Value;
                var cellValue3 = dataGridView1.Rows[e.RowIndex].Cells[2].Value;
                var cellValue4 = dataGridView1.Rows[e.RowIndex].Cells[3].Value;
                var cellValue5 = dataGridView1.Rows[e.RowIndex].Cells[4].Value;
                var cellValue6 = dataGridView1.Rows[e.RowIndex].Cells[5].Value;
                var cellValue7 = dataGridView1.Rows[e.RowIndex].Cells[6].Value;
                var cellValue8 = dataGridView1.Rows[e.RowIndex].Cells[7].Value;

                textBox15.Text = cellValue1 != null ? cellValue1.ToString() : "";
                textBox1.Text = cellValue2 != null ? cellValue2.ToString() : "";
                textBox2.Text = cellValue3 != null ? cellValue3.ToString() : "";
                textBox3.Text = cellValue4 != null ? cellValue4.ToString() : "";
                textBox4.Text = cellValue5 != null ? cellValue5.ToString() : "";
                textBox5.Text = cellValue6 != null ? cellValue6.ToString() : "";
                textBox14.Text = cellValue7 != null ? cellValue7.ToString() : "";
                textBox13.Text = cellValue8 != null ? cellValue8.ToString() : "";
            }
            
            if (iii == 1) 
            {
                var cellValue1 = dataGridView1.Rows[e.RowIndex].Cells[0].Value;
                var cellValue2 = dataGridView1.Rows[e.RowIndex].Cells[1].Value;
                var cellValue3 = dataGridView1.Rows[e.RowIndex].Cells[2].Value;
                var cellValue4 = dataGridView1.Rows[e.RowIndex].Cells[3].Value;
                var cellValue5 = dataGridView1.Rows[e.RowIndex].Cells[4].Value;
                var cellValue6 = dataGridView1.Rows[e.RowIndex].Cells[5].Value;
                var cellValue7 = dataGridView1.Rows[e.RowIndex].Cells[6].Value;
                var cellValue8 = dataGridView1.Rows[e.RowIndex].Cells[7].Value;
                var cellValue9 = dataGridView1.Rows[e.RowIndex].Cells[8].Value;
                
                textBox16.Text = cellValue1 != null ? cellValue1.ToString() : "";
                textBox7.Text = cellValue2 != null ? cellValue2.ToString() : "";
                textBox8.Text = cellValue3 != null ? cellValue3.ToString() : "";
                textBox17.Text = cellValue4 != null ? cellValue4.ToString() : "";
                textBox18.Text = cellValue5 != null ? cellValue5.ToString() : "";
                textBox21.Text = cellValue6 != null ? cellValue6.ToString() : "";
                textBox22.Text = cellValue7 != null ? cellValue7.ToString() : "";
                textBox19.Text = cellValue8 != null ? cellValue8.ToString() : "";
                textBox20.Text = cellValue9 != null ? cellValue9.ToString() : "";
            }
            if(iii==2){
                var cellValue6 = dataGridView1.Rows[e.RowIndex].Cells[0].Value;
                var cellValue12 = dataGridView1.Rows[e.RowIndex].Cells[1].Value;

                textBox12.Text = cellValue6 != null ? cellValue6.ToString() : "";
                textBox6.Text = cellValue12 != null ? cellValue12.ToString() : "";

            }
            
        }
        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {

        }

        private void Form1_BackColorChanged(object sender, EventArgs e)
        {

        }

        private void tabControl1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void tabPage1_Click(object sender, EventArgs e)
        {

        }

        private void label8_Click(object sender, EventArgs e)
        {

        }

        private void button6_Click(object sender, EventArgs e)
        {
            conexion.Open();

            string consulta = "INSERT INTO CATASTRO (codigo_catastral, Xini, Yini, Xfin, Yfin, superficie, distrito, zona) VALUES ('" +
                                textBox7.Text + "', " +
                                textBox8.Text + ", " +
                                textBox17.Text + ", " +
                                textBox18.Text + ", " +
                                textBox21.Text + ", " +
                                textBox22.Text + ", '" +
                                textBox19.Text + "', '" +
                                textBox20.Text + "');";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int filasAfectadas = comando.ExecuteNonQuery();

            if (filasAfectadas > 0)
            {
                MessageBox.Show("Catastro Agregado correctamente");
            }
            else
            {
                MessageBox.Show("No se pudo agregar el catastro. Verifique los datos.");
            }

            conexion.Close();
            LlenarTablaCatastro();

        }



        private void button5_Click(object sender, EventArgs e)
        {
            conexion.Open();

            string consulta = "DELETE FROM CATASTRO WHERE id_catastro = " + textBox16.Text + ";";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int filasAfectadas = comando.ExecuteNonQuery();

            if (filasAfectadas > 0)
            {
                MessageBox.Show("Catastro eliminado correctamente");
            }
            else
            {
                MessageBox.Show("No se pudo eliminar el catastro.");
            }

            conexion.Close();
            LlenarTablaCatastro();
        }

        private void button4_Click_1(object sender, EventArgs e)
        {
            conexion.Open();

            string consulta = "UPDATE CATASTRO SET " +
                              "codigo_catastral = '" + textBox7.Text + "', " +
                              "Xini = " + textBox8.Text + ", " +
                              "Yini = " + textBox17.Text + ", " +
                              "Xfin = " + textBox18.Text + ", " +
                              "Yfin = " + textBox21.Text + ", " +
                              "superficie = " + textBox22.Text + ", " +
                              "distrito = '" + textBox19.Text + "', " +
                              "zona = '" + textBox20.Text + "' " +
                              "WHERE id_catastro = " + textBox16.Text + ";";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int filasAfectadas = comando.ExecuteNonQuery();

            if (filasAfectadas > 0)
            {
                MessageBox.Show("Catastro actualizado correctamente");
            }
            else
            {
                MessageBox.Show("No se pudo actualizar el catastro.");
            }

            conexion.Close();
            LlenarTablaCatastro();
        }

        private void button8_Click(object sender, EventArgs e)
        {
            LlenarTablaCatastro();
            vaciar();
        }

        private void button7_Click(object sender, EventArgs e)
        {
            LlenarTablaPropietario();
            vaciar();
        }

        private void button9_Click(object sender, EventArgs e)
        {
            LlenarTablaPosee();
            vaciar();
        }

        private void button13_Click(object sender, EventArgs e)
        {
            conexion.Open();

            string consulta = "INSERT INTO POSEE (id_propietario, id_catastro) VALUES (" + textBox6.Text + ", " + textBox12.Text + ");";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int filasAfectadas = comando.ExecuteNonQuery();

            if (filasAfectadas > 0)
            {
                MessageBox.Show("Relación entre propietario y catastro agregada correctamente.");
            }
            else
            {
                MessageBox.Show("No se pudo agregar la relación.");
            }

            conexion.Close();
            LlenarTablaPosee();
        }

        private void button12_Click(object sender, EventArgs e)
        {
            conexion.Open();

            string consulta = "DELETE FROM POSEE WHERE id_propietario = " + textBox6.Text + " AND id_catastro = " + textBox12.Text + ";";

            SqlCommand comando = new SqlCommand(consulta, conexion);
            int filasAfectadas = comando.ExecuteNonQuery();

            if (filasAfectadas > 0)
            {
                MessageBox.Show("Relación eliminada correctamente.");
            }
            else
            {
                MessageBox.Show("No se pudo eliminar la relación.");
            }

            conexion.Close();

            LlenarTablaPosee();
        }


        private void button14_Click(object sender, EventArgs e)
        {
            vaciar();
        }

        private void button15_Click(object sender, EventArgs e)
        {
            vaciar();
        }

        private void button16_Click(object sender, EventArgs e)
        {
            vaciar();
        }

        private void label7_Click(object sender, EventArgs e)
        {

        }

        private void textBox16_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox20_TextChanged(object sender, EventArgs e)
        {

        }

        private void label21_Click(object sender, EventArgs e)
        {

        }

        private void label22_Click(object sender, EventArgs e)
        {

        }

        private void textBox21_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox22_TextChanged(object sender, EventArgs e)
        {

        }

        private void label23_Click(object sender, EventArgs e)
        {

        }

        private void label24_Click(object sender, EventArgs e)
        {

        }

        private void textBox17_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox18_TextChanged(object sender, EventArgs e)
        {

        }

        private void label19_Click(object sender, EventArgs e)
        {

        }

        private void label20_Click(object sender, EventArgs e)
        {

        }

        private void textBox19_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox7_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox8_TextChanged(object sender, EventArgs e)
        {

        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void button10_Click(object sender, EventArgs e)
        {
            login form = new login();
            form.Show();
            this.Hide();
        }



        
        
    }
}
