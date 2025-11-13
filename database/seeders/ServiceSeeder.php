<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Accounting Services',
                'description' => 'Accurate bookkeeping, financial statements, budgeting and management reporting.',
                'service_details' => [
                    'Accounting System Design & Implementation',
                    'Financial Accounting',
                    'Budgeting',
                    'Financial Reporting',
                    'MIS Reports',
                    'Financial Analysis',
                    'Asset Accounting Management',
                    'Depreciation and Amortization Schedules',
                ],
            ],
            [
                'name' => 'GST Tax',
                'description' => 'Comprehensive GST services including registration, compliance, return filing, and input tax credit management to ensure smooth tax operations for your business.',
                'service_details' => [
                    'GST Registration for proprietorship, partnership, company, and LLP.',
                    'Consultancy for maintaining accurate GST records and documentation.',
                    'Advisory on proper accounting and reconciliation for GST compliance.',
                    'Guidance on various GST-related issues and notifications.',
                    'Preparation and filing of monthly, quarterly, and annual GST returns (GSTR-1, GSTR-3B, GSTR-9, etc.).',
                    'Assistance in claiming and reconciling Input Tax Credit (ITC).',
                    'Consultancy on reverse charge mechanism (RCM) and exempted supplies.',
                    'Representation and assistance during GST audits, assessments, and departmental inquiries.',
                    'Advisory on e-invoicing and e-way bill compliance.',
                    'Periodic review and health check of GST compliance for risk mitigation.',
                ],
            ],

            [
                'name' => 'Corporate Finance',
                'description' => 'Project reports, CMA data and funding advisory including ECBs and private placements.',
                'service_details' => [
                    'Preparations of Project Reports',
                    'Preparation of CMA data for bank loans',
                    'Private placement of shares, Inter-Corporate Deposit, Terms loans, working capital limits, etc.',
                    'External Credit Borrowings (ECBs)',
                ],
            ],
            [
                'name' => 'Corporate Services',
                'description' => 'Company incorporation, compliance and secretarial support.',
                'service_details' => [
                    'Incorporation of company',
                    'Consultancy on Company Law matters.',
                    'Planning for Mergers, Acquisitions, De-mergers, and Corporate re-organizations.',
                    'Filing of annual returns and various forms, documents.',
                    'Clause 49 review for compliance with fiscal, corporate and tax laws.',
                    'Secretarial Matters including share transfers.',
                    'Maintenance of Statutory records.',
                    'Consultancy on Public/Rights/Bonus Issue of shares.',
                    'Change of Name, Objects, Registered Office, etc.',
                ],
            ],
            [
                'name' => 'Income Tax',
                'description' => 'Tax planning, compliance and advisory for individuals and corporates.',
                'service_details' => [
                    'Consultancy on various intricate matters pertaining to Income tax.',
                    'Effective tax management, tax structuring and advisory services.',
                    'Tax Planning for Corporates and others.',
                    'Designing / restructuring salary structure to minimise tax burden.',
                    'Obtaining Advance tax Rulings.',
                    'Filing Income Tax and Wealth Tax returns for all kinds of assessees.',
                    'Liaison with Income tax department for rectification, assessment, obtaining refunds etc.',
                ],
            ],
            [
                'name' => 'TDS',
                'description' => 'Advice and compliance services for TDS/TCS including TAN registration and returns.',
                'service_details' => [
                    'Advice on all matters related to compliance of TDS/TCS provisions.',
                    'Obtaining Tax Deduction Account Number (TAN).',
                    'Periodic review of TDS/ Withholding Tax compliance.',
                    'Computation of monthly TDS.',
                    'Monthly reconciliation of TDS due and deposited.',
                    'Monthly deposit of TDS electronically/manually.',
                    'Issue of monthly/annual TDS certificates.',
                    'Filing of quarterly E-TDS/Manual Returns.',
                    'Filing of Correction Statements.',
                ],
            ],
            [
                'name' => 'Corporate Governance',
                'description' => 'Governance frameworks, monitoring and advisory for best practices and compliance.',
                'service_details' => [
                    'Periodic monitoring through internal audit',
                    'Independent audit',
                    'Independent verification',
                    'Effective Supervision',
                    'Accountability',
                    'Formation of an independent audit committee for the board',
                    'Adequate disclosure and transparency in reports',
                    'Participation in board meetings.',
                ],
            ],
            [
                'name' => 'Services for Non-Residents',
                'description' => 'PAN allotment, tax planning, FEMA/RBI advisory and returns filing for non-residents.',
                'service_details' => [
                    'Allotment of Permanent Account number (PAN)',
                    'Tax planning.',
                    'Obtaining Advance Rulings on debatable issues.',
                    'Consultancy/ advice on FEMA/RBI matters.',
                    'Filing Income Tax/ Wealth Tax Returns',
                    'Advice on making investments',
                ],
            ],
            [
                'name' => 'Payroll',
                'description' => 'Payroll processing, statutory deductions and salary disbursement services.',
                'service_details' => [
                    'Preparation of Monthly Salary Sheet.',
                    'Deductions as per applicable laws like Income Tax, Provident Fund, Professional Tax etc.',
                    'Computation and deposit of TDS, ESI, PF etc.',
                    'Disbursement/ Online Payment of Salary.',
                    'Pay slip by password protected e-mail.',
                    'Issue of Form 16 to employees.',
                ],
            ],
            [
                'name' => 'Forensic Audit',
                'description' => 'Fraud risk assessment, internal controls review and fraud prevention advisory.',
                'service_details' => [
                    'Overall fraud and misconduct risk assessment',
                    'Assistance in the design of global compliance programmes',
                    'Reviews of internal fraud controls, compliance, anti-fraud and corporate ethics programs',
                    'Comprehensive and practical advice concerning all aspects of fraud risk management',
                    'Fraud risk management and fraud prevention training',
                ],
            ],
        ];

        foreach ($services as $s) {
            Service::updateOrCreate([
                'slug' => Str::slug($s['name']),
            ], [
                'name' => $s['name'],
                'slug' => Str::slug($s['name']),
                'description' => $s['description'],
                'service_details' => $s['service_details'],
            ]);
        }
    }
}
