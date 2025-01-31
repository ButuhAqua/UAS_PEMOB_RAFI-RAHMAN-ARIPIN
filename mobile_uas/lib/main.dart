import 'package:flutter/material.dart';
import 'package:get/get.dart';

import '../routes/route.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return GetMaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Curug App',
      initialRoute: AppRoutes.WELCOME, // Pastikan ini sesuai dengan routes/route.dart
      getPages: AppRoutes.routes, // Ambil daftar rute dari route.dart
    );
  }
}