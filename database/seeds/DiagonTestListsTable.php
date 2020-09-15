<?php

use Illuminate\Database\Seeder;

class DiagonTestListsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('diagon_test_lists')->truncate();
    $statement = "INSERT INTO diagon_test_lists ( name, price, test_category_id, created_at, updated_at) VALUES
        ('Blood for TC OF WBC', 125, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for DC OF WBC', 125, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('ESR', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for TC.DC HB ,ESR', 150, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for RBC Count', 150, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Platelet Count', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for PCV', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('B.T.C.T', 150, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Film', 250, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('MP', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for Reticulocyte Count', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for Circulating Edinophil Count(TCE)', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Grooping ', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Bleeding Time(BT)', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Clooting Time(CT)', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Prothombin Time', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Aldehyde Test', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Bone Marrow', 3000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Cross Matching', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Fsting Blood Suger(FBS)', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('TPHA', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('RBS', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('RA test', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Suger(GTT)', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Urea', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Creatinine', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood Urea Nitrogen(BUN)', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Creatinine Clearance Rate-CCR', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Uric Acid', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Lipid Profile', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Cholesterol', 250, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum TG', 350, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum HDL-Cholesterol', 350, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum LDL-Cholesterol', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('S.Billirubi(BOTH)', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('S.Billirubin(TOTAL)', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('SGOT', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('SGPT', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Alkaline phosphates', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum peotein', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Albumin', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Total protien with A/G Ratio', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum C.P.K', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum CK-MB', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum L.D.H', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Amylase', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Acid phosphates', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Calcium', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Phosphates', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Electrolytes(Na,K,CI,CO2)', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Lithium', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBAIC', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('D.Dimer', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('ASO ', 250, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('RA/RF', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CRP', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CRPTire', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Rose walter Test', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Triple Antigen', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('VDRL', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('T.P.H.A', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Widal Test', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS Ag Test', 350, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS Ag (Elisa Method)', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBE Ag Test', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti HBE (Toal)', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Mantoux Test', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('A.N.A', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Hexagon TB', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pregnancy Test', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti DNA (Anti Ds DNA)', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HIV Test', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Desngu Test', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CF-for Filaria', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CF-for kala zar', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine p.t', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('RH-Antibody Titry', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('H -Pylori (IGG)', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Complements-C3', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Complements-C4', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti TB- IGA', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti TB- IGG', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti TB- IGM', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Immunoglobulin IGA', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Immunoglobulin IGE', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Immunoglobulin IGG', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Immunoglobulin IGM', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Anti HBs(HBs ab)', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HCV', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Blood for C/S', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('PUS for Gram Stam', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Sputum C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Sputum Esonophil Count', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Sputum R/E', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Sputum A.F.B', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Throat Swab C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urethral Smear G.C (Collection Charge=100/=)', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Throat Swab Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('P.S G/C (Collection Charge=100/=)', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Vaginal Swab C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Vaginal Swab Gram Stain (Collection Charge=100/=)', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Eye Swab C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        (' C/E  COUNT', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('C.S.F for Cytology', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('C.S.F for Biochemistry', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('C.S.F for Maligment Cell', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('C.S.F for Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pleural Fluid C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pleural Fluid Cytology', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pleural Fluid Biochemistry', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pleural Fluid Maligment Cell', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pleural Fluid Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Semen Analysis', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Skin Acraping Fungus (Collection Charge=100/=)', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ascitic Fluid C/S (Collection Charge=100/=)', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ascitic Fluid Cytology', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ascitic Fluid Biochemistry', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('PUS for C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ascitic Fluid Maligment Cell', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ascitic Fluid Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Synovioal Fluid C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Synovioal Fluid Cytology', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Synovioal Fluid Biochemistry', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Synovioal Fluid Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Wound Swab For C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('T3,T4,TSH', 1500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Free-T3', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Free-T4', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Free-TSH', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('LH', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('FSH', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Estrogen', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Progesterone', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Prolactine', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Testosterone', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Cortisol (one Sample)', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Alfa Fato Protein', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Circinoma Embryonic Antigen (CEA)', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Prostatic Antigen (PSA)', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Seram Beta Heg', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urinary Beta Heg', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CA-125', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CA-15.3', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CA-19.9', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CA-242', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Tegretol level', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Cyclosorine level', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Gradenal level', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Serum Parcetamol level', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Cocaine Test(From Urine)', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Troponin-1', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine  R/E, ', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine for Suger', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Protein/Albumin', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Benz,Jones Protein', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Specific Gravity', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Acetone', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Bile Salts', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Bile Pigment', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Urobilinogen', 100, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Creatine', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Pregnancy', 200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine 24 HoursUrineTotal Protein', 800, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine for Gram Stain', 500, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('S.Uric Acid', 300, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine for C/S', 700, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Urine Amylase', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Stool R/E', 100, 7, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Stool O.B.T', 150, 7, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Stool R/s', 100, 7, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Stool Floating Method', 200, 7, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Stool Culture Sensitive C/S', 700, 7, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('E.C.G (12 lead)', 400, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ecocardiography (B/W)', 1000, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Ecocardiography (C)', 1500, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Color Doppler Echo', 2500, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital E.E.G', 3000, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('E.T.T', 3500, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Endoscopy of Upper GI Tract (Normal)', 800, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Video Endoscopy of Upper GI Tract', 1500, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Video Clonoscopy (Without Medicine)', 5000, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Normal Clolonoscopy (Without Medicine)', 3200, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Endoscopy Biopsy(Taking)', 3000, 8, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital Both Brest', 2000, 5, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital Left Brest', 1000, 5, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital Right Brest', 1000, 5, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray P.N.S', 300, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Skull (B/V', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Chest P/A Vew', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Chest A/P', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Chest Left/Right View (B/V', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Chest Oblique View-Right/Left (B/V)', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray K.U.B Abdomen Ereet posture', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Cerivcal Spine (B/V)', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Dorso Lumbar Spine(B/V)', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Lumbo Sacral Spine(B/V)', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Pelvis With both hop joints(A/P)', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Pelvis With both hop joints(B/V)', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('S.lipid nprofile', 800, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Leg (B/V)', 400, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Femur (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Thigh Hip (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Knee Right (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ankle -Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Wrist -Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Elbow -Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Shoulder joint -Right/Left (B/V)', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Hand-Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Forearm-Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Arm Right/Left (B/V)', 350, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray I.V.U/I.V.P(Without contrast)', 1200, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ba -Enema (Double With contrast)', 1200, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ba -Enema (Single With contrast)', 1000, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ba-meal S/D', 700, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ba-Follow Through', 1500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Ba-Shallow of Oesopgagus', 900, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Cysto Urothogram (With contrast)', 2500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray T.Tube Cholingiogram (With contrast)', 1600, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray O.C.G (With contrast) ', 500, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X -Ray Myelogram for Lumber.Dorsal & Cervical0 (Add contrast)', 3100, 9, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray P.N.S', 500, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Skull (B/V)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Chest P/A  View', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Chest A/P', 500, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Chest Left/Right View (B/V) (one side only)', 500, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Chest Oblique View -Right/Left(B/V) (one side only)', 500, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray K.U.B Abdomen Ereet posture', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Cervical Spine (B/V)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Dorso Lumbar Spine (B/V)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Lumbo Sacral Spine (B/V)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Pelvis with both hop joints(A/P)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Pelvis With both S.I  Joint (A/P)', 800, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Leg (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Femur (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Thigh Hip (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Knee Right (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ankle-Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Wrist-Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Elbow-Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Shoulder joint -Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Hand -Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Arm -Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray I.V.U/ I.V.P(Without Contrast)', 2500, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray I.V.U/ I.V.P(With Contrast)', 3700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray I.V.U with MCU 2500+1200=Contrast', 3700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray M.C.U with R.C.U 2500+1200=Contrast', 3700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Fistulogram 2000+1200=Contrast', 3200, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ba-Enema(Double Single Contrast)', 2700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ba-Follow Through of Intenstine', 2700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ba-Meal S/D', 1400, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ba-Meal Upper GI Tract & Position', 1400, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Ba-Shallow Oesopgagus', 1400, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Cystogram/retrograde Cysto Urothrogram(With Contrast)', 3700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray T. Tube Cholingiogram (With Contrast)', 2200, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Hystero-Salpingography(With Contrast)', 3700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CT Scan od Brain(Pain)', 4000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Skull/ Head/ Pituitary Fossa', 4000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Brain & Orbit / Only Optic lesion', 5000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Mastoid Bones', 5000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('P.N.S (Para Nasal Sinuses)', 5000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Nasopharynx', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Neck', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Chest/Thorax/Both Lung (HRCT-2mm thickness)', 6500, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Mediastinum', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS (Liver,Gall Bladder)', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Upper Abdomen (HBS,Pancreas,Spleen,Kidneys)', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Whole Abdomen/Abdominal-pelvic organs', 11000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS & KUB Region', 11000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CT Scan of Adrenal Glands', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Abdominal Mass/ lumps', 11000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('K.U.B(Kidneys,Urinary,Bladder)', 11000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Kidneys (With of Without Supra-Renals Glads)', 5500, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Lower Abdomen/Pelvis Organ', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Genito-Urinary System', 11000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Joint-hips / Knees/ Elbows / Shoulders(Fach)', 5500, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Arms/Forearm/Hands (Each)', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Right/Leegs/Foots(Each)', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Cervical Spine-Plain', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Dorsal Spine-Plain', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Lumber sacral Spine-Plain', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Myelo-CT of Cervical Spine', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Myelo-CT of Dorsal Spine', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Myelo-CT of Lumber Spine', 7000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Pelvis with both hop joints(B/V)', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Digital X-Ray Forearm -Right/Left (B/V)', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Uterus & Adnexae(Uterus,F.Tubes,Ovaries)', 5500, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pllvic bones/Sacrum', 6000, 6, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Whole Abdomen (Male)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Whole Abdomen (Female)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS/UPPER Abdomen(Male/Female)', 600, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Lower Abdomen/Uterus & Adnexae (Female)', 600, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB/Genito Urinary Tract(Female)', 700, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB/Genito Urinary Tract(Male)', 600, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Only KUB(Male/Female)', 600, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB with prostate (Residual Volume)(Male)', 600, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pregnancy Profile (Female)', 700, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Chest (Male/Female)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Thyroid (Male/Female)', 1000, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Brain-Neonantal(Male/Female)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Breast(Female)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Scrotum/Testes (Male)', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Whole Abdomen (Male)', 1200, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Whole Abdomen (Female)', 1200, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('HBS/UPPER Abdomen(Male/Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Lower Abdomen/Uterus & Adnexae (Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB/Genito Urinary Tract(Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB/Genito Urinary Tract(Male)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Only KUB(Male/Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('KUB with prostate (Residual Volume)(Male)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Pregnancy Profile (Female)', 1200, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Chest (Male/Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Thyroid (Male/Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Brain-Neonantal(Male/Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Breast(Female)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Scrotum/Testes (Male)', 1000, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG 4D Color (Any System)(Male/Female)', 1500, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG 2D Color TVS(Female)', 1500, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('FNAC', 1500, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('FNAC with collection(1500+1000)', 2500, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG Guided with collection(1500+1000+800)', 3300, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CT Guided FNAC', 6000, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Histopahology Large', 2000, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Histopahology Medium', 1500, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Histopahology Small', 1200, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Bone Marrow', 3000, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('PAPS', 1000, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Malignant', 1000, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('SERUM LIPID PROFILE', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  MASTOID  T/V', 600, 10,'2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  MASTOID  T/V', 600, 10, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  MASTOID  T/V', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  NASOPHRANGE L/V', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY NASAL BONE  ', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  T.M  JOINT  B/V', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  T.M  JOINT  B/V', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  T.M  JOINT  B/V', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY  T.M  JOINT  B/V', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('T4  TSH', 1200, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('x-ray  L/T sub M  REGON  L/V', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('CBC', 400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('T3', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('T4', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('TSH', 600, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RT-STYLOID PROCESSL\V', 600, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('X-RAY L\S B\V', 700, 4, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('Haemoglobin HGB% Eleetrophrosis', 2000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('A.N.F', 1000, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('B  HCG', 1400, 1, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF  W/A  (COLOUR)', 1200, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF  L/A   (COLOUR)', 1100, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF  P/P   (COLOUR)', 1100, 2, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF  W/A   ( BLACK WHITE )', 800, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF  L/A   ( BLACK WHITE )', 700, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10'),
        ('USG  OF   P/P ( BLACK  WHITE )', 700, 3, '2020-01-12 13:04:10', '2020-01-12 13:04:10')";
        DB::unprepared($statement);
    }
}
