import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:google_fonts/google_fonts.dart';

class DashboardPage extends StatelessWidget {
  const DashboardPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Dashboard',
          style: GoogleFonts.poppins(fontSize: 20, fontWeight: FontWeight.bold),
        ),
        backgroundColor: Colors.blueAccent,
      ),
      drawer: Drawer(
        child: ListView(
          padding: EdgeInsets.zero,
          children: [
            DrawerHeader(
              decoration: const BoxDecoration(
                color: Colors.blueAccent,
              ),
              child: Text(
                'Menu',
                style: GoogleFonts.poppins(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                  color: Colors.white,
                ),
              ),
            ),
            ListTile(
              leading: const Icon(Icons.person, color: Colors.blueAccent),
              title: Text('Profile', style: GoogleFonts.poppins(fontSize: 18)),
              onTap: () {
                // Navigasi ke halaman Profile (buat rute sesuai kebutuhan)
                Get.toNamed('/profile');
              },
            ),
            ListTile(
              leading: const Icon(Icons.note, color: Colors.blueAccent),
              title: Text('Catatan', style: GoogleFonts.poppins(fontSize: 18)),
              onTap: () {
                // Navigasi ke halaman Catatan
                Get.toNamed('/catatan');
              },
            ),
            ListTile(
              leading: const Icon(Icons.logout, color: Colors.redAccent),
              title: Text('Logout', style: GoogleFonts.poppins(fontSize: 18)),
              onTap: () {
                // Kembali ke halaman login
                Get.offAllNamed('/login');
              },
            ),
          ],
        ),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                'Jadwal Les Private Bahasa Inggris',
                style: GoogleFonts.poppins(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              const SizedBox(height: 20),
              Card(
                elevation: 4,
                child: ListTile(
                  leading: const Icon(Icons.book, color: Colors.blueAccent),
                  title: Text(
                    'Materi: Grammar & Vocabulary',
                    style: GoogleFonts.poppins(
                      fontSize: 18,
                      fontWeight: FontWeight.w600,
                    ),
                  ),
                  subtitle: Text(
                    'Waktu: Senin, 10:00 - 11:30 AM',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 4,
                child: ListTile(
                  leading: const Icon(Icons.book, color: Colors.blueAccent),
                  title: Text(
                    'Materi: Speaking Practice',
                    style: GoogleFonts.poppins(
                      fontSize: 18,
                      fontWeight: FontWeight.w600,
                    ),
                  ),
                  subtitle: Text(
                    'Waktu: Rabu, 1:00 - 2:30 PM',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 4,
                child: ListTile(
                  leading: const Icon(Icons.book, color: Colors.blueAccent),
                  title: Text(
                    'Materi: Listening & Comprehension',
                    style: GoogleFonts.poppins(
                      fontSize: 18,
                      fontWeight: FontWeight.w600,
                    ),
                  ),
                  subtitle: Text(
                    'Waktu: Jumat, 3:00 - 4:30 PM',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
