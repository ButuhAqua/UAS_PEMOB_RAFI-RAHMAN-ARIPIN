import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';

class CatatanPage extends StatelessWidget {
  const CatatanPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    // Data catatan dummy (bisa diganti dengan data dari backend)
    final List<Map<String, String>> catatanList = [
      {
        'tanggal': '01 Februari 2025',
        'pengajar': 'Bu Siti',
        'catatan': 'Perbaiki pemahaman tentang grammar. Fokus pada latihan past tense.'
      },
      {
        'tanggal': '25 Januari 2025',
        'pengajar': 'Pak Ahmad',
        'catatan': 'Latihan speaking sudah bagus, terus tingkatkan kosa kata.'
      },
      {
        'tanggal': '15 Januari 2025',
        'pengajar': 'Bu Nita',
        'catatan': 'Listening section masih perlu peningkatan. Coba dengarkan podcast berbahasa Inggris.'
      },
    ];

    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Catatan Siswa',
          style: GoogleFonts.poppins(fontSize: 20, fontWeight: FontWeight.bold),
        ),
        backgroundColor: Colors.blueAccent,
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: ListView.builder(
          itemCount: catatanList.length,
          itemBuilder: (context, index) {
            final catatan = catatanList[index];
            return Card(
              elevation: 3,
              margin: const EdgeInsets.only(bottom: 15),
              child: Padding(
                padding: const EdgeInsets.all(12.0),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Text(
                      'Tanggal: ${catatan['tanggal']}',
                      style: GoogleFonts.poppins(fontSize: 16, fontWeight: FontWeight.w600),
                    ),
                    const SizedBox(height: 5),
                    Text(
                      'Pengajar: ${catatan['pengajar']}',
                      style: GoogleFonts.poppins(fontSize: 14, fontWeight: FontWeight.w500),
                    ),
                    const SizedBox(height: 10),
                    Text(
                      'Catatan:',
                      style: GoogleFonts.poppins(fontSize: 14, fontWeight: FontWeight.bold),
                    ),
                    const SizedBox(height: 5),
                    Text(
                      catatan['catatan'] ?? '',
                      style: GoogleFonts.poppins(fontSize: 14),
                    ),
                  ],
                ),
              ),
            );
          },
        ),
      ),
    );
  }
}
