import 'package:flutter/material.dart';
import 'package:get/get.dart';

import '../routes/route.dart';

class WelcomeScreen extends StatefulWidget {
  const WelcomeScreen({Key? key}) : super(key: key);

  @override
  _WelcomeScreenState createState() => _WelcomeScreenState();
}

class _WelcomeScreenState extends State<WelcomeScreen> {
  @override
  void initState() {
    super.initState();
    // Delay 3 detik sebelum pindah ke Login
    Future.delayed(const Duration(seconds: 3), () {
      Get.offNamed(AppRoutes.LOGIN); // Navigasi ke halaman Login
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        color: Colors.white,  // Background biru sebagai dasar
        child: Center(
          child: Image.asset(
            'assets/image/welcomecui.png',
            fit: BoxFit.contain,  // Gambar akan diatur agar tidak terlalu besar
            width: MediaQuery.of(context).size.width * 0.6,  // Atur ukuran responsif 60% lebar layar
            errorBuilder: (context, error, stackTrace) {
              return const Center(
                child: Text(
                  'Gambar tidak ditemukan',
                  style: TextStyle(color: Colors.red, fontSize: 16),
                ),
              );
            },
          ),
        ),
      ),
    );
  }
}
