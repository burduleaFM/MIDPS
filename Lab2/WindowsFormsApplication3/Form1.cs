using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication3
{
     public partial class Form1 : Form
     {
          public string operatie;
          public double operand1, operand2, rezultat;
          public Form1()
          {
               InitializeComponent();
               textBox1.ReadOnly = true;
          }

          private void Form1_Load(object sender, EventArgs e)
          {

          }

          private void button17_Click(object sender, EventArgs e)
          {
            try
            {
                operand2 = Convert.ToDouble(textBox1.Text);
                switch (operatie)
                {
                    case "+":
                        rezultat = operand2 + operand1;
                        textBox1.Text = Convert.ToString(rezultat);
                        break;
                    case "-":
                        rezultat = operand1 - operand2;
                        textBox1.Text = Convert.ToString(rezultat);
                        break;
                    case "/":
                        if (operand2 == 0)
                        {
                            textBox1.Text = "0.0";
                            break;
                        }
                        else
                        {
                            rezultat = operand1 / operand2;
                            textBox1.Text = Convert.ToString(rezultat);
                            break;
                        }

                    case "*":
                        rezultat = operand1 * operand2;
                        textBox1.Text = Convert.ToString(rezultat);
                        break;

                    case "x^y":
                        rezultat = System.Math.Pow(Convert.ToDouble(operand1), Convert.ToDouble(operand2));
                        textBox1.Text = Convert.ToString(rezultat);
                        break;

                }
            }
            catch
            {
                MessageBox.Show("Verificati parametrii si operatiile");
            }
          }

          private void button16_Click(object sender, EventArgs e)
          {
               if (textBox1.Text.Contains("-"))
               {
                    textBox1.Text = textBox1.Text.Remove(0, 1);
               }
               else
               {
                    textBox1.Text = "-" + textBox1.Text;
               }
          }

          private void button15_Click(object sender, EventArgs e)
          {
               if (textBox1.Text.StartsWith("."))
               {
                    textBox1.Text = ("0,");
               }
               if (textBox1.Text.Contains(","))
               {

               }

               else if (textBox1.Text.StartsWith(","))
               {
                    textBox1.Text += ",";
               }

               else
               {
                    textBox1.Text += ",";
               }

          }

          private void button14_Click(object sender, EventArgs e)
          {
            try
            {
                operand1 = Convert.ToDouble(textBox1.Text);
                operatie = "/";
                textBox1.Clear();
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
          }

        private void button13_Click(object sender, EventArgs e)
        {
            try
            {
                operand1 = Convert.ToDouble(textBox1.Text);
                operatie = "-";
                textBox1.Clear();
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
          }

          private void button12_Click(object sender, EventArgs e)
          {
            try
            {
                operand1 = Convert.ToDouble(textBox1.Text);
                operatie = "*";
                textBox1.Clear();
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
                     
          }

          private void button9_Click(object sender, EventArgs e)
          {
            try
            {
                operand1 = Convert.ToDouble(textBox1.Text);
                operatie = "+";
                textBox1.Clear();
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
          }

          private void button11_Click(object sender, EventArgs e)
          {

               textBox1.Text += "0";
          }

          private void button6_Click(object sender, EventArgs e)
          {
               textBox1.Text += "6";
          }

          private void button5_Click(object sender, EventArgs e)
          {
               textBox1.Text += "5";
          }

          private void button4_Click(object sender, EventArgs e)
          {
               textBox1.Text += "4";
          }

          private void button3_Click(object sender, EventArgs e)
          {
               textBox1.Text += "3";
          }

          private void button2_Click(object sender, EventArgs e)
          {
               textBox1.Text += "2";
          }

          private void button1_Click(object sender, EventArgs e)
          {
               textBox1.Text += "1";
          }

          private void button18_Click(object sender, EventArgs e)
          {
               textBox1.Text = String.Empty;
          }

          private void button10_Click(object sender, EventArgs e)
          {
               textBox1.Text += "9";
          }

          private void button8_Click(object sender, EventArgs e)
          {
               textBox1.Text += "8";
          }

          private void button7_Click(object sender, EventArgs e)
          {
               textBox1.Text += "7";
          }

          

          

          private void button20_Click(object sender, EventArgs e)
          {
            try {
                rezultat = (System.Math.Sqrt(Convert.ToDouble(textBox1.Text)));
                textBox1.Text = Convert.ToString(rezultat);
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
               
          }

          private void button19_Click(object sender, EventArgs e)
          {
            try {
                operand1 = Convert.ToDouble(textBox1.Text);
                operatie = "x^y";
                textBox1.Clear();
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
               
          }

          private void button22_Click(object sender, EventArgs e)
          {
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Sin(Convert.ToDouble(textBox1.Text)));
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametrii");
            }
          }

          private void button23_Click(object sender, EventArgs e)
          {
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Cos(Convert.ToDouble(textBox1.Text)));
            } catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
               
          }

          private void button24_Click(object sender, EventArgs e)
          {
               
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Tan(Convert.ToDouble(textBox1.Text)));
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
        }

          private void button26_Click(object sender, EventArgs e)
          {
               
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Asin(Convert.ToDouble(textBox1.Text)));
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
        }

          private void button27_Click(object sender, EventArgs e)
          {
               
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Acos(Convert.ToDouble(textBox1.Text)));
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
        }

          private void button28_Click(object sender, EventArgs e)
          {
               
            try
            {
                textBox1.Text = Convert.ToString(System.Math.Atan(Convert.ToDouble(textBox1.Text)));
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
        }

          private void button21_Click(object sender, EventArgs e)
          {
               
            try
            {
                int var = 1;
                for (int i = 1; i < Convert.ToInt16(textBox1.Text); i++)
                {
                    var = i * var;
                }
                textBox1.Text = Convert.ToString(var);
            }
            catch
            {
                MessageBox.Show("Mai intii specificati parametru");
            }
            
          }

          private void button25_Click(object sender, EventArgs e)
          {
               string str = textBox1.Text;
               int n = str.Length;
               textBox1.Text = (str.Substring(0, n - 1));
          }

          private double fact(double x)
          {
               double i = 1.0;
               for (double s = 1; s <=x; s++)
               {
                    i = i * s;
               }
               return i;
          }

     }
}
