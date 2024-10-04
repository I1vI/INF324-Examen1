/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author Edwin
 */
@WebServlet(urlPatterns = {"/Servlet"})
public class Servlet extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            String codigoCatastral = request.getParameter("codigo_catastral");
            String digito =codigoCatastral.substring(0, 1);
            String mensaje = "Impuesto no valido";
            if(digito.equals("1")){
                mensaje="Impuesto alto";
            }else{
                if(digito.equals("2")){
                    mensaje="Impuesto medio";
                }else{
                    if(digito.equals("3")){
                        mensaje="Impuesto bajo";
                    }else{
                        mensaje="Impuesto no valido";
                    }
                }
            }
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Tipo de Impuesto</title>");
            out.println("<style>");
            out.println("body { font-family: Arial, sans-serif; background-color: #f0f8ff; text-align: center; padding-top: 50px; }");
            out.println(".mensaje { color: #4CAF50; font-size: 2rem; font-weight: bold; margin-top: 20px; }");
            out.println(".container { border: 2px solid #4CAF50; padding: 20px; display: inline-block; background-color: #fff; border-radius: 10px; }");
            out.println(".boton { margin-top: 20px; padding: 10px 20px; font-size: 1rem; color: white; background-color: #4CAF50; border: none; border-radius: 5px; cursor: pointer; }");
            out.println("</style>");
            
            out.println("</head>");
            out.println("<body>");
            out.println("<div class='container'>");
            out.println("<h1>Tu tienes un: </h1>");
            out.println("<p class='mensaje'>" + mensaje + "</p>");
            out.println("<button class='boton' onclick='window.history.back()'>Volver</button>"); // Botón para retroceder
            out.println("</div>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
