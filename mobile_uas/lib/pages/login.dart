import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:google_fonts/google_fonts.dart';

import '../api/api_service.dart';

class LoginPage extends StatefulWidget {
  const LoginPage({Key? key}) : super(key: key);

  @override
  State<LoginPage> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  final TextEditingController emailController = TextEditingController();
  final TextEditingController passwordController = TextEditingController();
  final ApiService apiService = ApiService();

  bool isLoading = false; // Untuk indikator loading

  // Fungsi untuk login
  Future<void> handleLogin() async {
    setState(() {
      isLoading = true;
    });

    try {
      String token = await apiService.login(
        emailController.text,
        passwordController.text,
      );

      Get.snackbar(
        'Login Berhasil',
        'Selamat datang di aplikasi pendidikan!',
        snackPosition: SnackPosition.BOTTOM,
        backgroundColor: Colors.greenAccent,
        colorText: Colors.white,
      );

      Get.toNamed('/dashboard'); // Pindah ke halaman dashboard
    } catch (e) {
      Get.snackbar(
        'Login Gagal',
        e.toString(),
        snackPosition: SnackPosition.BOTTOM,
        backgroundColor: Colors.redAccent,
        colorText: Colors.white,
      );
    } finally {
      setState(() {
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'LIA Login',
          style: GoogleFonts.poppins(
            fontSize: 20,
            fontWeight: FontWeight.bold,
            color: Colors.white,
          ),
        ),
        backgroundColor: Colors.blueAccent,
      ),
      body: Container(
        color: Colors.blueAccent,
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Center(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                const Icon(
                  Icons.school,
                  size: 80,
                  color: Colors.white,
                ),
                const SizedBox(height: 20),
                TextField(
                  controller: emailController, // Tambahkan controller
                  style: GoogleFonts.poppins(fontSize: 16, color: Colors.white),
                  decoration: InputDecoration(
                    labelText: 'Email',
                    labelStyle: GoogleFonts.poppins(color: Colors.white70),
                    border: const OutlineInputBorder(),
                    prefixIcon: const Icon(Icons.email, color: Colors.white),
                    enabledBorder: const OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.white),
                    ),
                    focusedBorder: const OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.white),
                    ),
                  ),
                ),
                const SizedBox(height: 10),
                TextField(
                  controller: passwordController, // Tambahkan controller
                  obscureText: true,
                  style: GoogleFonts.poppins(fontSize: 16, color: Colors.white),
                  decoration: InputDecoration(
                    labelText: 'Password',
                    labelStyle: GoogleFonts.poppins(color: Colors.white70),
                    border: const OutlineInputBorder(),
                    prefixIcon: const Icon(Icons.lock, color: Colors.white),
                    enabledBorder: const OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.white),
                    ),
                    focusedBorder: const OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.white),
                    ),
                  ),
                ),
                const SizedBox(height: 20),
                isLoading
                    ? const CircularProgressIndicator(
                        color: Colors.white,
                      )
                    : SizedBox(
                        width: double.infinity,
                        child: ElevatedButton(
                          onPressed: handleLogin, // Panggil fungsi login
                          style: ElevatedButton.styleFrom(
                            padding: const EdgeInsets.symmetric(vertical: 12),
                            backgroundColor: Colors.white,
                          ),
                          child: Text(
                            'Login',
                            style: GoogleFonts.poppins(
                              fontSize: 18,
                              fontWeight: FontWeight.bold,
                              color: Colors.blueAccent,
                            ),
                          ),
                        ),
                      ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
