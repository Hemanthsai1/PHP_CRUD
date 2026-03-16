<?php
// Include the database connection
include('db.php');

// Fetch all students with their associated class name
$query = "SELECT student.id, student.name, student.email, student.image, classes.name AS class_name
          FROM student
          JOIN classes ON student.class_id = classes.class_id";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Make sure the path is correct -->
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Students List</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Students</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['class_name'] . "</td>
                            <td><img src='uploads/" . $row['image'] . "' alt='Student Image' width='50'></td>
                            <td>
                                <a href='view.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>View</a>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No students found</td></tr>";
            }

we've these 2 folders inside the Blob

1. Excel-DS
{
  "API": {
    "Production": {
      "SOPs": [

        {
          "filename": "Equipment usage log book.xlsx",
          "path": "API/Production/SOPs/Equipment usage log book.xlsx",
          "display_name": "Equipment Usage Log Book"
        },
        {
          "filename": "Request, Issuance, Retrieval, Filling and Review of BPR, ECR.xlsx",
          "path": "API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.xlsx",
          "display_name": "Request, Issuance, Retrieval, Filling and Review of BPR & ECR"
        }
      ]
    },
    "Warehouse": {
      "SOPs": [
        {
          "filename": "SOP for Receipt and Storage of Raw and Packing Materials in warehouse.xlsx",
          "path": "API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.xlsx",
          "display_name": "SOP for Receipt and Storage of Raw and Packing Materials in Warehouse"
        }
      ]
    }
  },

  "Injectables": {
    "Analytical Department": {
      "SOPs": [
        {
          "filename": "Analytical method transfers.xlsx",
          "path": "Injectables/Analytical Department/SOPs/Analytical method transfers.xlsx",
          "display_name": "Analytical Method Transfers"
        },
        {
          "filename": "Analytical Method Validation.xlsx",
          "path": "Injectables/Analytical Department/SOPs/Analytical Method Validation.xlsx",
          "display_name": "Analytical Method Validation"
        },
        {
          "filename": "Dissolution.xlsx",
          "path": "Injectables/Analytical Department/SOPs/Dissolution.xlsx",
          "display_name": "Dissolution"
        }
      ]
    },
    "Engineering": {
      "SOPs": [
        {
          "filename": "Maintenence & calibration of weighing balances SOP.xlsx",
          "path": "Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.xlsx",
          "display_name": "Maintenance & Calibration of Weighing Balances SOP"
        }
      ]
    },
    "Production": {
      "SOPs": [
        {
          "filename": "Additional Material indent.xlsx",
          "path": "Injectables/Production/SOPs/Additional Material indent.xlsx",
          "display_name": "Additional Material Indent"
        },
        {
          "filename": "Aspetic Area Practice.xlsx",
          "path": "Injectables/Production/SOPs/Aspetic Area Practice.xlsx",
          "display_name": "Aseptic Area Practice"
        },
        {
          "filename": "Entry & Exit Procedure for Pharma Area.xlsx",
          "path": "Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.xlsx",
          "display_name": "Entry & Exit Procedure for Pharma Area"
        },
        {
          "filename": "Equipment Usage Log Book.xlsx",
          "path": "Injectables/Production/SOPs/Equipment Usage Log Book.xlsx",
          "display_name": "Equipment Usage Log Book"
        }
      ]
    },
    "Quality Assurance": {
      "SOPs": [
        {
          "filename": "Handling of Deviations.xlsx",
          "path": "Injectables/Quality Assurance/SOPs/Handling of Deviations.xlsx",
          "display_name": "Handling of Deviations"
        },
        {
          "filename": "Handling of Returned Goods.xlsx",
          "path": "Injectables/Quality Assurance/SOPs/Handling of Returned Goods.xlsx",
          "display_name": "Handling of Returned Goods"
        },
        {
          "filename": "Internal Audits.xlsx",
          "path": "Injectables/Quality Assurance/SOPs/Internal Audits.xlsx",
          "display_name": "Internal Audits"
        }
      ]
    }
  },

  "OSD": {
    "Production": {
      "SOPs": [
        {
          "filename": "Entry & exit procedure for pharma area.xlsx",
          "path": "OSD/Production/SOPs/Entry & exit procedure for pharma area.xlsx",
          "display_name": "Entry & Exit Procedure for Pharma Area"
        },
        {
          "filename": "Equipment usage log book.xlsx",
          "path": "OSD/Production/SOPs/Equipment usage log book.xlsx",
          "display_name": "Equipment Usage Log Book"
        }
      ]
    },
    "Quality Control": {
      "Protocols": [
        {
          "filename": "Photostability.xlsx",
          "path": "OSD/Quality Control/Protocols/Photostability.xlsx",
          "display_name": "Photostability"
        }
      ]
    }
  },
    "Proposals": {
    "QNC (Quality & Compliance)": [
      {
        "filename": "QNC6S02 (6 Systems Audit).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).xlsx",
        "display_name": "QNC6S02 (6 Systems Audit)"
      },
      {
        "filename": "QNCAT10 (Audit Trigger).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).xlsx",
        "display_name": "QNCAT10 (Audit Trigger)"
      },
      {
        "filename": "QNCCV08 (Computer System Validation).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).xlsx",
        "display_name": "QNCCV08 (Computer System Validation)"
      },
      {
        "filename": "QNCDD06 (Facility Due Diligence).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).xlsx",
        "display_name": "QNCDD06 (Facility Due Diligence)"
      },
      {
        "filename": "QNCMA05 (Mock Audit).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).xlsx",
        "display_name": "QNCMA05 (Mock Audit)"
      },
      {
        "filename": "QNCQS07 (Quality System Development).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).xlsx",
        "display_name": "QNCQS07 (Quality System Development)"
      },
      {
        "filename": "QNCRS03 (Retainership).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).xlsx",
        "display_name": "QNCRS03 (Retainership)"
      },
      {
        "filename": "QNCVA01 (Vendor Audit).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).xlsx",
        "display_name": "QNCVA01 (Vendor Audit)"
      },
      {
        "filename": "QNCXP04 (GxP Audit).xlsx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).xlsx",
        "display_name": "QNCXP04 (GxP Audit)"
      }
    ],
    "RDS (Regulatory API - DS)": [
      {
        "filename": "RDSAF03 (ASMF).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).xlsx",
        "display_name": "RDSAF03 (ASMF)"
      },
      {
        "filename": "RDSCA05 (CADIFA).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSCA05 (CADIFA).xlsx",
        "display_name": "RDSCA05 (CADIFA)"
      },
      {
        "filename": "RDSCP02 (CEP).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).xlsx",
        "display_name": "RDSCP02 (CEP)"
      },
      {
        "filename": "RDSID04 (SPOR).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).xlsx",
        "display_name": "RDSID04 (SPOR)"
      },
      {
        "filename": "RDSMF01 (DMF).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).xlsx",
        "display_name": "RDSMF01 (DMF)"
      },
      {
        "filename": "RDSRW06 (DMF RoW).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).xlsx",
        "display_name": "RDSRW06 (DMF RoW)"
      },
      {
        "filename": "RDSTS08 (Toxicology Services).xlsx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).xlsx",
        "display_name": "RDSTS08 (Toxicology Services)"
      }
    ],
    "RDSTS08 (Toxicology Services)": [
      {
        "filename": "RDSTS08 (Toxicology Services) (2).xlsx",
        "path": "Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).xlsx",
        "display_name": "RDSTS08 (Toxicology Services) (2)"
      },
      {
        "filename": "RDSTS08 (Toxicology Services).xlsx",
        "path": "Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).xlsx",
        "display_name": "RDSTS08 (Toxicology Services)"
      }
    ],
    "REU (RA EU)": [
      {
        "filename": "REUAT08 (Audit Trigger).xlsx",
        "path": "Proposals/REU (RA EU)/REUAT08 (Audit Trigger).xlsx",
        "display_name": "REUAT08 (Audit Trigger)"
      },
      {
        "filename": "REUDD05 (Due Diligence).xlsx",
        "path": "Proposals/REU (RA EU)/REUDD05 (Due Diligence).xlsx",
        "display_name": "REUDD05 (Due Diligence)"
      },
      {
        "filename": "REULT11 (Language Translation).xlsx",
        "path": "Proposals/REU (RA EU)/REULT11 (Language Translation).xlsx",
        "display_name": "REULT11 (Language Translation)"
      },
      {
        "filename": "REUMA01 (MAA).xlsx",
        "path": "Proposals/REU (RA EU)/REUMA01 (MAA).xlsx",
        "display_name": "REUMA01 (MAA)"
      },
      {
        "filename": "REUMH02 (MAH + BRS + BTS + QP + QPPV).xlsx",
        "path": "Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).xlsx",
        "display_name": "REUMH02 (MAH + BRS + BTS + QP + QPPV)"
      },
      {
        "filename": "REUMW10 (Medical Writing).xlsx",
        "path": "Proposals/REU (RA EU)/REUMW10 (Medical Writing).xlsx",
        "display_name": "REUMW10 (Medical Writing)"
      },
      {
        "filename": "REUPT03 (PIL Testing).xlsx",
        "path": "Proposals/REU (RA EU)/REUPT03 (PIL Testing).xlsx",
        "display_name": "REUPT03 (PIL Testing)"
      },
      {
        "filename": "REURR09 (EU Regulatory Resources).xlsx",
        "path": "Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).xlsx",
        "display_name": "REURR09 (EU Regulatory Resources)"
      },
      {
        "filename": "REUSP06 (Scientific Package).xlsx",
        "path": "Proposals/REU (RA EU)/REUSP06 (Scientific Package).xlsx",
        "display_name": "REUSP06 (Scientific Package)"
      },
      {
        "filename": "REUUK07 (UK IRP).xlsx",
        "path": "Proposals/REU (RA EU)/REUUK07 (UK IRP).xlsx",
        "display_name": "REUUK07 (UK IRP)"
      }
    ],
    "REUMW10 (Medical Writing)": [
      {
        "filename": "REUMW10 (Medical Writing).xlsx",
        "path": "Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).xlsx",
        "display_name": "REUMW10 (Medical Writing)"
      }
    ],
    "RLB (Regulatory Labeling)": [
      {
        "filename": "RLBAW03 (Artwork).xlsx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).xlsx",
        "display_name": "RLBAW03 (Artwork)"
      },
      {
        "filename": "RLBLL02 (Leaflet).xlsx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).xlsx",
        "display_name": "RLBLL02 (Leaflet)"
      },
      {
        "filename": "RLBOA04 (Original Application).xlsx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).xlsx",
        "display_name": "RLBOA04 (Original Application)"
      },
      {
        "filename": "RLBSP01 (SPL).xlsx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).xlsx",
        "display_name": "RLBSP01 (SPL)"
      },
      {
        "filename": "RLBSP01 (SPM).xlsx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).xlsx",
        "display_name": "RLBSP01 (SPM)"
      }
    ],
    "RPS (Regulatory Publishing & Submission)": [
      {
        "filename": "RPSCP04 (ClinicalReport Level Publishing).xlsx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).xlsx",
        "display_name": "RPSCP04 (ClinicalReport Level Publishing)"
      },
      {
        "filename": "RPSDL03 (Document Level Publishing).xlsx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).xlsx",
        "display_name": "RPSDL03 (Document Level Publishing)"
      },
      {
        "filename": "RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).xlsx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).xlsx",
        "display_name": "RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA)"
      },
      {
        "filename": "RPSMF01 (Publishing of DMFCEPASMF).xlsx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).xlsx",
        "display_name": "RPSMF01 (Publishing of DMFCEPASMF)"
      }
    ],
    "RPV (Regulatory PV)": [
      {
        "filename": "RPVDS01 (PV Database Support).xlsx",
        "path": "Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).xlsx",
        "display_name": "RPVDS01 (PV Database Support)"
      }
    ],
    "RRW Biologics&Biosimilars": [
      {
        "filename": "RRWBS01 (Biologics  Biosimilar ).xlsx",
        "path": "Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).xlsx",
        "display_name": "RRWBS01 (Biologics  Biosimilar )"
      }
    ],
    "RUS (RA US)": [
      {
        "filename": "RUS5B05 (505B2).xlsx",
        "path": "Proposals/RUS (RA US)/RUS5B05 (505B2).xlsx",
        "display_name": "RUS5B05 (505B2)"
      },
      {
        "filename": "RUS5K04 (510K).xlsx",
        "path": "Proposals/RUS (RA US)/RUS5K04 (510K).xlsx",
        "display_name": "RUS5K04 (510K)"
      },
      {
        "filename": "RUSAN03 (ANDA).xlsx",
        "path": "Proposals/RUS (RA US)/RUSAN03 (ANDA).xlsx",
        "display_name": "RUSAN03 (ANDA)"
      },
      {
        "filename": "RUSCC08 (CC).xlsx",
        "path": "Proposals/RUS (RA US)/RUSCC08 (CC).xlsx",
        "display_name": "RUSCC08 (CC)"
      },
      {
        "filename": "RUSDD09 (Due Diligence).xlsx",
        "path": "Proposals/RUS (RA US)/RUSDD09 (Due Diligence).xlsx",
        "display_name": "RUSDD09 (Due Diligence)"
      },
      {
        "filename": "RUSIN01 (IND).xlsx",
        "path": "Proposals/RUS (RA US)/RUSIN01 (IND).xlsx",
        "display_name": "RUSIN01 (IND)"
      },
      {
        "filename": "RUSND02 (NDA).xlsx",
        "path": "Proposals/RUS (RA US)/RUSND02 (NDA).xlsx",
        "display_name": "RUSND02 (NDA)"
      },
      {
        "filename": "RUSRR10 (US Regulatory Resources).xlsx",
        "path": "Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).xlsx",
        "display_name": "RUSRR10 (US Regulatory Resources)"
      },
      {
        "filename": "RUSUA06 (US Agent).xlsx",
        "path": "Proposals/RUS (RA US)/RUSUA06 (US Agent).xlsx",
        "display_name": "RUSUA06 (US Agent)"
      },
      {
        "filename": "RUSVA12 (Veternary ANADA).xlsx",
        "path": "Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).xlsx",
        "display_name": "RUSVA12 (Veternary ANADA)"
      },
      {
        "filename": "RUSVN13 (Veternary NADA).xlsx",
        "path": "Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).xlsx",
        "display_name": "RUSVN13 (Veternary NADA)"
      },
      {
        "filename": "RUSWP07 (White Paper).xlsx",
        "path": "Proposals/RUS (RA US)/RUSWP07 (White Paper).xlsx",
        "display_name": "RUSWP07 (White Paper)"
      }
    ],
    "Software (RSS)": [
      {
        "filename": "RSSNE01 (eCTD).xlsx",
        "path": "Proposals/Software (RSS)/RSSNE01 (eCTD).xlsx",
        "display_name": "RSSNE01 (eCTD)"
      },
      {
        "filename": "RSSNL04 (ELN).xlsx",
        "path": "Proposals/Software (RSS)/RSSNL04 (ELN).xlsx",
        "display_name": "RSSNL04 (ELN)"
      },
      {
        "filename": "RSSNP03 (PDF Plugin).xlsx",
        "path": "Proposals/Software (RSS)/RSSNP03 (PDF Plugin).xlsx",
        "display_name": "RSSNP03 (PDF Plugin)"
      },
      {
        "filename": "RSSNS02 (SPL).xlsx",
        "path": "Proposals/Software (RSS)/RSSNS02 (SPL).xlsx",
        "display_name": "RSSNS02 (SPL)"
      }
    ] 
  }
}
----------------------------------------------------------------------------------------------------------------
2. Word-DS
{
  "API": {
    "Production": {
      "SOPs": [

        {
          "filename": "Equipment usage log book.docx",
          "path": "API/Production/SOPs/Equipment usage log book.docx",
          "display_name": "Equipment Usage Log Book"
        },
        {
          "filename": "Request, Issuance, Retrieval, Filling and Review of BPR, ECR.docx",
          "path": "API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.docx",
          "display_name": "Request, Issuance, Retrieval, Filling and Review of BPR & ECR"
        }
      ]
    },
    "Warehouse": {
      "SOPs": [
        {
          "filename": "SOP for Receipt and Storage of Raw and Packing Materials in warehouse.docx",
          "path": "API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.docx",
          "display_name": "SOP for Receipt and Storage of Raw and Packing Materials in Warehouse"
        }
      ]
    }
  },

  "Injectables": {
    "Analytical Department": {
      "SOPs": [
        {
          "filename": "Analytical method transfers.docx",
          "path": "Injectables/Analytical Department/SOPs/Analytical method transfers.docx",
          "display_name": "Analytical Method Transfers"
        },
        {
          "filename": "Analytical Method Validation.docx",
          "path": "Injectables/Analytical Department/SOPs/Analytical Method Validation.docx",
          "display_name": "Analytical Method Validation"
        },
        {
          "filename": "Dissolution.docx",
          "path": "Injectables/Analytical Department/SOPs/Dissolution.docx",
          "display_name": "Dissolution"
        }
      ]
    },
    "Engineering": {
      "SOPs": [
        {
          "filename": "Maintenence & calibration of weighing balances SOP.docx",
          "path": "Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.docx",
          "display_name": "Maintenance & Calibration of Weighing Balances SOP"
        }
      ]
    },
    "Production": {
      "SOPs": [
        {
          "filename": "Additional Material indent.docx",
          "path": "Injectables/Production/SOPs/Additional Material indent.docx",
          "display_name": "Additional Material Indent"
        },
        {
          "filename": "Aspetic Area Practice.docx",
          "path": "Injectables/Production/SOPs/Aspetic Area Practice.docx",
          "display_name": "Aseptic Area Practice"
        },
        {
          "filename": "Entry & Exit Procedure for Pharma Area.docx",
          "path": "Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.docx",
          "display_name": "Entry & Exit Procedure for Pharma Area"
        },
        {
          "filename": "Equipment Usage Log Book.docx",
          "path": "Injectables/Production/SOPs/Equipment Usage Log Book.docx",
          "display_name": "Equipment Usage Log Book"
        }
      ]
    },
    "Quality Assurance": {
      "SOPs": [
        {
          "filename": "Handling of Deviations.docx",
          "path": "Injectables/Quality Assurance/SOPs/Handling of Deviations.docx",
          "display_name": "Handling of Deviations"
        },
        {
          "filename": "Handling of Returned Goods.docx",
          "path": "Injectables/Quality Assurance/SOPs/Handling of Returned Goods.docx",
          "display_name": "Handling of Returned Goods"
        },
        {
          "filename": "Internal Audits.docx",
          "path": "Injectables/Quality Assurance/SOPs/Internal Audits.docx",
          "display_name": "Internal Audits"
        }
      ]
    }
  },

  "OSD": {
    "Production": {
      "SOPs": [
        {
          "filename": "Entry & exit procedure for pharma area.docx",
          "path": "OSD/Production/SOPs/Entry & exit procedure for pharma area.docx",
          "display_name": "Entry & Exit Procedure for Pharma Area"
        },
        {
          "filename": "Equipment usage log book.docx",
          "path": "OSD/Production/SOPs/Equipment usage log book.docx",
          "display_name": "Equipment Usage Log Book"
        }
      ]
    },
    "Quality Control": {
      "Protocols": [
        {
          "filename": "Photostability.docx",
          "path": "OSD/Quality Control/Protocols/Photostability.docx",
          "display_name": "Photostability"
        }
      ]
    }
  },
    "Proposals": {
    "QNC (Quality & Compliance)": [
      {
        "filename": "QNC6S02 (6 Systems Audit).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).docx",
        "display_name": "QNC6S02 (6 Systems Audit)"
      },
      {
        "filename": "QNCAT10 (Audit Trigger).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).docx",
        "display_name": "QNCAT10 (Audit Trigger)"
      },
      {
        "filename": "QNCCV08 (Computer System Validation).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).docx",
        "display_name": "QNCCV08 (Computer System Validation)"
      },
      {
        "filename": "QNCDD06 (Facility Due Diligence).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).docx",
        "display_name": "QNCDD06 (Facility Due Diligence)"
      },
      {
        "filename": "QNCMA05 (Mock Audit).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).docx",
        "display_name": "QNCMA05 (Mock Audit)"
      },
      {
        "filename": "QNCQS07 (Quality System Development).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).docx",
        "display_name": "QNCQS07 (Quality System Development)"
      },
      {
        "filename": "QNCRS03 (Retainership).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).docx",
        "display_name": "QNCRS03 (Retainership)"
      },
      {
        "filename": "QNCVA01 (Vendor Audit).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).docx",
        "display_name": "QNCVA01 (Vendor Audit)"
      },
      {
        "filename": "QNCXP04 (GxP Audit).docx",
        "path": "Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).docx",
        "display_name": "QNCXP04 (GxP Audit)"
      }
    ],
    "RDS (Regulatory API - DS)": [
      {
        "filename": "RDSAF03 (ASMF).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).docx",
        "display_name": "RDSAF03 (ASMF)"
      },
      {
        "filename": "RDSCA05 (CADIFA).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSCA05 (CADIFA).docx",
        "display_name": "RDSCA05 (CADIFA)"
      },
      {
        "filename": "RDSCP02 (CEP).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).docx",
        "display_name": "RDSCP02 (CEP)"
      },
      {
        "filename": "RDSID04 (SPOR).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).docx",
        "display_name": "RDSID04 (SPOR)"
      },
      {
        "filename": "RDSMF01 (DMF).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).docx",
        "display_name": "RDSMF01 (DMF)"
      },
      {
        "filename": "RDSRW06 (DMF RoW).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).docx",
        "display_name": "RDSRW06 (DMF RoW)"
      },
      {
        "filename": "RDSTS08 (Toxicology Services).docx",
        "path": "Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).docx",
        "display_name": "RDSTS08 (Toxicology Services)"
      }
    ],
    "RDSTS08 (Toxicology Services)": [
      {
        "filename": "RDSTS08 (Toxicology Services) (2).docx",
        "path": "Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).docx",
        "display_name": "RDSTS08 (Toxicology Services) (2)"
      },
      {
        "filename": "RDSTS08 (Toxicology Services).docx",
        "path": "Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).docx",
        "display_name": "RDSTS08 (Toxicology Services)"
      }
    ],
    "REU (RA EU)": [
      {
        "filename": "REUAT08 (Audit Trigger).docx",
        "path": "Proposals/REU (RA EU)/REUAT08 (Audit Trigger).docx",
        "display_name": "REUAT08 (Audit Trigger)"
      },
      {
        "filename": "REUDD05 (Due Diligence).docx",
        "path": "Proposals/REU (RA EU)/REUDD05 (Due Diligence).docx",
        "display_name": "REUDD05 (Due Diligence)"
      },
      {
        "filename": "REULT11 (Language Translation).docx",
        "path": "Proposals/REU (RA EU)/REULT11 (Language Translation).docx",
        "display_name": "REULT11 (Language Translation)"
      },
      {
        "filename": "REUMA01 (MAA).docx",
        "path": "Proposals/REU (RA EU)/REUMA01 (MAA).docx",
        "display_name": "REUMA01 (MAA)"
      },
      {
        "filename": "REUMH02 (MAH + BRS + BTS + QP + QPPV).docx",
        "path": "Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).docx",
        "display_name": "REUMH02 (MAH + BRS + BTS + QP + QPPV)"
      },
      {
        "filename": "REUMW10 (Medical Writing).docx",
        "path": "Proposals/REU (RA EU)/REUMW10 (Medical Writing).docx",
        "display_name": "REUMW10 (Medical Writing)"
      },
      {
        "filename": "REUPT03 (PIL Testing).docx",
        "path": "Proposals/REU (RA EU)/REUPT03 (PIL Testing).docx",
        "display_name": "REUPT03 (PIL Testing)"
      },
      {
        "filename": "REURR09 (EU Regulatory Resources).docx",
        "path": "Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).docx",
        "display_name": "REURR09 (EU Regulatory Resources)"
      },
      {
        "filename": "REUSP06 (Scientific Package).docx",
        "path": "Proposals/REU (RA EU)/REUSP06 (Scientific Package).docx",
        "display_name": "REUSP06 (Scientific Package)"
      },
      {
        "filename": "REUUK07 (UK IRP).docx",
        "path": "Proposals/REU (RA EU)/REUUK07 (UK IRP).docx",
        "display_name": "REUUK07 (UK IRP)"
      }
    ],
    "REUMW10 (Medical Writing)": [
      {
        "filename": "REUMW10 (Medical Writing).docx",
        "path": "Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).docx",
        "display_name": "REUMW10 (Medical Writing)"
      }
    ],
    "RLB (Regulatory Labeling)": [
      {
        "filename": "RLBAW03 (Artwork).docx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).docx",
        "display_name": "RLBAW03 (Artwork)"
      },
      {
        "filename": "RLBLL02 (Leaflet).docx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).docx",
        "display_name": "RLBLL02 (Leaflet)"
      },
      {
        "filename": "RLBOA04 (Original Application).docx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).docx",
        "display_name": "RLBOA04 (Original Application)"
      },
      {
        "filename": "RLBSP01 (SPL).docx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).docx",
        "display_name": "RLBSP01 (SPL)"
      },
      {
        "filename": "RLBSP01 (SPM).docx",
        "path": "Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).docx",
        "display_name": "RLBSP01 (SPM)"
      }
    ],
    "RPS (Regulatory Publishing & Submission)": [
      {
        "filename": "RPSCP04 (ClinicalReport Level Publishing).docx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).docx",
        "display_name": "RPSCP04 (ClinicalReport Level Publishing)"
      },
      {
        "filename": "RPSDL03 (Document Level Publishing).docx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).docx",
        "display_name": "RPSDL03 (Document Level Publishing)"
      },
      {
        "filename": "RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).docx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).docx",
        "display_name": "RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA)"
      },
      {
        "filename": "RPSMF01 (Publishing of DMFCEPASMF).docx",
        "path": "Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).docx",
        "display_name": "RPSMF01 (Publishing of DMFCEPASMF)"
      }
    ],
    "RPV (Regulatory PV)": [
      {
        "filename": "RPVDS01 (PV Database Support).docx",
        "path": "Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).docx",
        "display_name": "RPVDS01 (PV Database Support)"
      }
    ],
    "RRW Biologics&Biosimilars": [
      {
        "filename": "RRWBS01 (Biologics  Biosimilar ).docx",
        "path": "Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).docx",
        "display_name": "RRWBS01 (Biologics  Biosimilar )"
      }
    ],
    "RUS (RA US)": [
      {
        "filename": "RUS5B05 (505B2).docx",
        "path": "Proposals/RUS (RA US)/RUS5B05 (505B2).docx",
        "display_name": "RUS5B05 (505B2)"
      },
      {
        "filename": "RUS5K04 (510K).docx",
        "path": "Proposals/RUS (RA US)/RUS5K04 (510K).docx",
        "display_name": "RUS5K04 (510K)"
      },
      {
        "filename": "RUSAN03 (ANDA).docx",
        "path": "Proposals/RUS (RA US)/RUSAN03 (ANDA).docx",
        "display_name": "RUSAN03 (ANDA)"
      },
      {
        "filename": "RUSCC08 (CC).docx",
        "path": "Proposals/RUS (RA US)/RUSCC08 (CC).docx",
        "display_name": "RUSCC08 (CC)"
      },
      {
        "filename": "RUSDD09 (Due Diligence).docx",
        "path": "Proposals/RUS (RA US)/RUSDD09 (Due Diligence).docx",
        "display_name": "RUSDD09 (Due Diligence)"
      },
      {
        "filename": "RUSIN01 (IND).docx",
        "path": "Proposals/RUS (RA US)/RUSIN01 (IND).docx",
        "display_name": "RUSIN01 (IND)"
      },
      {
        "filename": "RUSND02 (NDA).docx",
        "path": "Proposals/RUS (RA US)/RUSND02 (NDA).docx",
        "display_name": "RUSND02 (NDA)"
      },
      {
        "filename": "RUSRR10 (US Regulatory Resources).docx",
        "path": "Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).docx",
        "display_name": "RUSRR10 (US Regulatory Resources)"
      },
      {
        "filename": "RUSUA06 (US Agent).docx",
        "path": "Proposals/RUS (RA US)/RUSUA06 (US Agent).docx",
        "display_name": "RUSUA06 (US Agent)"
      },
      {
        "filename": "RUSVA12 (Veternary ANADA).docx",
        "path": "Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).docx",
        "display_name": "RUSVA12 (Veternary ANADA)"
      },
      {
        "filename": "RUSVN13 (Veternary NADA).docx",
        "path": "Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).docx",
        "display_name": "RUSVN13 (Veternary NADA)"
      },
      {
        "filename": "RUSWP07 (White Paper).docx",
        "path": "Proposals/RUS (RA US)/RUSWP07 (White Paper).docx",
        "display_name": "RUSWP07 (White Paper)"
      }
    ],
    "Software (RSS)": [
      {
        "filename": "RSSNE01 (eCTD).docx",
        "path": "Proposals/Software (RSS)/RSSNE01 (eCTD).docx",
        "display_name": "RSSNE01 (eCTD)"
      },
      {
        "filename": "RSSNL04 (ELN).docx",
        "path": "Proposals/Software (RSS)/RSSNL04 (ELN).docx",
        "display_name": "RSSNL04 (ELN)"
      },
      {
        "filename": "RSSNP03 (PDF Plugin).docx",
        "path": "Proposals/Software (RSS)/RSSNP03 (PDF Plugin).docx",
        "display_name": "RSSNP03 (PDF Plugin)"
      },
      {
        "filename": "RSSNS02 (SPL).docx",
        "path": "Proposals/Software (RSS)/RSSNS02 (SPL).docx",
        "display_name": "RSSNS02 (SPL)"
      }
    ]
  }
}

so when the user selects the Template using the 
import React, { useState, useRef, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import "../styles/home.css";
import API from "../api/api";
import toast from "react-hot-toast";
import { getCurrentUser } from "../utils/auth";

type BatchResult = {
  excelFileName: string;
  excelFile: File;
  sessionId?: any;
  pdf?: any;
  docx?: any;
  pdf_sas_url?: string;
  docx_sas_url?: string;
  uploadData?: any;
  error?: any;
  index?: number;
};

function Home() {
  const [docChoice, setDocChoice] = useState("");
  const [selectedFolderPath, setSelectedFolderPath] = useState<string[]>([]);
  const [templatesByFolder, setTemplatesByFolder] = useState<any>({});
  const [userDoc, setUserDoc] = useState<File | null>(null);
  const [dataSource, setDataSource] = useState<File | null>(null);
  const [dataSources, setDataSources] = useState<File[]>([]);
  const [loading, setLoading] = useState(false);
  const [progress, setProgress] = useState(0);
  const [progressMessage, setProgressMessage] = useState("");
  const [totalSteps, setTotalSteps] = useState(5);
  const eventSourceRef = useRef<EventSource | null>(null);
  const progressIntervalRef = useRef<number | null>(null);
  const templatesLoadedRef = useRef(false);
  const navigate = useNavigate();
  const currentUser = getCurrentUser();

  useEffect(() => {
    if (templatesLoadedRef.current) return;
    templatesLoadedRef.current = true;
    const loadTemplates = async () => {
      try {
        const response = await fetch('/templates.json');
        if (response.ok) {
          const data = await response.json();
          setTemplatesByFolder(data);
        } else {
          console.error("Failed to load templates.json");
          try {
            const apiResponse = await API.get("/api/templates/list");
            if (apiResponse.data) {
              setTemplatesByFolder(apiResponse.data);
            }
          } catch (apiError) {
            console.error("Failed to load templates from API:", apiError);
          }
        }
      } catch (error) {
        console.error("Error loading templates:", error);
        try {
          const apiResponse = await API.get("/api/templates/list");
          if (apiResponse.data) {
            setTemplatesByFolder(apiResponse.data);
          }
        } catch (apiError) {
          console.error("Failed to load templates from API:", apiError);
        }
      }
    };

    loadTemplates();

    return () => {
      if (eventSourceRef.current) eventSourceRef.current.close();
      if (progressIntervalRef.current !== null) {
        window.clearInterval(progressIntervalRef.current);
      }
    };
  }, []);

  const getNodeAtPath = (root: any, path: string[]) => {
    let node = root;
    for (const key of path) {
      if (!node) return null;
      node = node[key];
    }
    return node;
  };

  const getChildFolders = (node: any) => {
    if (!node || Array.isArray(node)) return [];
    if (node.files && typeof node === "object") {
      return Object.keys(node).filter((key) => key !== "files");
    }
    return Object.keys(node);
  };

  const normalizeFileItem = (file: any, basePath: string[]) => {
    if (file && typeof file === "object") {
      const label = file.display_name || file.filename || file.name || file.path;
      const value = file.path || file.filename || file.name || label;
      return { label, value, sas_url: file.sas_url };
    }
    const label = String(file);
    const value = basePath.length > 0 ? `${basePath.join("/")}/${label}` : label;
    return { label, value };
  };

  const getFilesForNode = (node: any, basePath: string[]) => {
    if (!node) return [];
    if (Array.isArray(node)) {
      return node.map((file) => normalizeFileItem(file, basePath));
    }
    if (node.files && Array.isArray(node.files)) {
      return node.files.map((file: any) => normalizeFileItem(file, basePath));
    }
    return [];
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();

    const filesToProcess = dataSources.length > 0 ? dataSources : (dataSource ? [dataSource] : []);

    if ((!docChoice && !userDoc) || filesToProcess.length === 0) {
      toast.error("Please select a template or upload a Word document and provide at least one data source.");
      return;
    }

    try {
      setLoading(true);
      setProgress(0);
      setProgressMessage("Initializing batch processing...");

      let initProgress = 0;
      const intervalId = window.setInterval(() => {
        if (initProgress < 15) {
          initProgress += 1;
          setProgress(initProgress);
        } else {
          window.clearInterval(intervalId);
          progressIntervalRef.current = null;
        }
      }, 100);
      progressIntervalRef.current = intervalId;

      setProgressMessage("Preparing template and files...");

      const formData = new FormData();
      if (userDoc) {
        formData.append("template", userDoc, userDoc.name);
        setProgress(20);
        setProgressMessage("Template loaded, preparing upload...");
      } else if (docChoice) {
        setProgressMessage("Fetching template through API...");
        // Use API proxy to avoid CORS issues with direct Azure fetch
        const templateResp = await API.get(
          `/api/templates/${encodeURIComponent(docChoice)}`,
          { responseType: "blob" }
        );
        formData.append("template", new Blob([templateResp.data]), docChoice);
        
        setProgress(20);
        setProgressMessage("Template loaded, preparing upload...");
      }

      formData.append("dataSource", filesToProcess[0], filesToProcess[0].name);

      setProgress(25);
      setProgressMessage("Uploading template and initial file...");

      const uploadRes = await API.post("/api/upload", formData, {
        headers: { "Content-Type": "multipart/form-data" },
      });
      const uploadData = uploadRes.data;

      try {
        const dsName = filesToProcess[0]?.name || "";
        if (dsName) sessionStorage.setItem("datasourceName", dsName);
      } catch {}

      if (uploadData.edit_session_id) {
        sessionStorage.setItem("editSessionId", uploadData.edit_session_id);
      }
      
      if (uploadData.document_id) {
        sessionStorage.setItem("documentId", uploadData.document_id);
      }

      // Store SAS URLs if returned from initial upload
      if (uploadData.sas_url) sessionStorage.setItem("docxSasUrl", uploadData.sas_url);
      if (uploadData.pdf_sas_url) sessionStorage.setItem("pdfSasUrl", uploadData.pdf_sas_url);

      if (progressIntervalRef.current !== null) {
        window.clearInterval(progressIntervalRef.current);
        progressIntervalRef.current = null;
      }

      if (!uploadData.session_id) {
        throw new Error("No session_id received from server");
      }

      const sessionId = uploadData.session_id as string;
      sessionStorage.setItem("sessionId", sessionId);

      setProgress(30);
      setProgressMessage("Session created, preparing parallel processing...");

      setProgress(40);
      setProgressMessage(`Processing ${filesToProcess.length} file(s) in parallel...`);

      const totalFiles = filesToProcess.length;

      let templateBlob: Blob | null = null;
      if (userDoc) {
        templateBlob = userDoc;
      } else if (docChoice) {
        // Use API to fetch template to avoid direct SAS CORS issues
        const templateResp = await API.get(
          `/api/templates/${encodeURIComponent(docChoice)}`,
          { responseType: "blob" }
        );
        templateBlob = new Blob([templateResp.data]);
      }

      const processFile = async (file: File, index: number): Promise<BatchResult> => {
        try {
          let fileSessionId = sessionId;
          if (index > 0) {
            const fileUploadFormData = new FormData();
            if (userDoc) {
              fileUploadFormData.append("template", userDoc, userDoc.name);
            } else if (docChoice && templateBlob) {
              fileUploadFormData.append("template", templateBlob, docChoice);
            }
            fileUploadFormData.append("dataSource", file, file.name);

            const uploadPromise = API.post("/api/upload", fileUploadFormData, {
              headers: { "Content-Type": "multipart/form-data" },
            });

            const timeoutPromise = new Promise<never>((_, reject) =>
              setTimeout(() => reject(new Error("Upload timeout")), 60000)
            );

            const fileUploadRes: any = await Promise.race([uploadPromise, timeoutPromise]);

            if (fileUploadRes.data.session_id) {
              fileSessionId = fileUploadRes.data.session_id;
            }
          }

          const fillFormData = new FormData();
          fillFormData.append("data", file, file.name);

          const fillPromise = API.post(`/api/fill/${fileSessionId}`, fillFormData, {
            headers: { "Content-Type": "multipart/form-data" },
          });

          const fillTimeoutPromise = new Promise<never>((_, reject) =>
            setTimeout(() => reject(new Error("Fill timeout")), 120000)
          );

          const fillRes: any = await Promise.race([fillPromise, fillTimeoutPromise]);
          const fillResult = fillRes.data;

          return {
            excelFileName: file.name,
            excelFile: file,
            sessionId: fillResult.session_id || fileSessionId,
            pdf: fillResult.pdf,
            docx: fillResult.docx,
            pdf_sas_url: fillResult.pdf_sas_url,
            docx_sas_url: fillResult.sas_url,
            uploadData: index === 0 ? uploadData : null,
            index: index,
          };
        } catch (err: any) {
          console.error(`Error processing file ${file.name}:`, err);
          return {
            excelFileName: file.name,
            excelFile: file,
            error: err.response?.data?.detail || err.message || "Unknown error occurred",
            index: index,
          };
        }
      };

      setProgressMessage(`Started processing of ${totalFiles} file(s)...`);

      const startProgress = 40;
      const endProgress = 95;
      const progressRange = endProgress - startProgress;

      let completedCount = 0;
      const updateProgress = (fileName: string) => {
        completedCount++;
        const progressPercent = startProgress + Math.round((completedCount / totalFiles) * progressRange);
        setProgress(progressPercent);
        if (completedCount % 2 === 0 || completedCount === totalFiles) {
          setProgressMessage(
            `Processing: ${completedCount}/${totalFiles} files completed${fileName ? ` (${fileName})` : ''}`
          );
        }
      };

      const processPromises = filesToProcess.map((file, index) =>
        processFile(file, index).then(result => {
          updateProgress(file.name);
          return result;
        }).catch((err: any) => {
          updateProgress(file.name);
          return {
            excelFileName: file.name,
            excelFile: file,
            error: err.response?.data?.detail || err.message || "Unknown error occurred",
            index: index,
          };
        })
      );

      const results: BatchResult[] = await Promise.all(processPromises);

      const finalBatchResults = results.sort((a, b) => (a.index || 0) - (b.index || 0));

      const resultsToStore: BatchResult[] = finalBatchResults.map(({ index, ...rest }) => rest as BatchResult);
      localStorage.setItem("batchResults", JSON.stringify(resultsToStore));
      localStorage.setItem("previewData", JSON.stringify(uploadData));
      if (selectedFolderPath.length > 0) {
        localStorage.setItem("documentFolder", selectedFolderPath.join("/"));
      }

      const successfulResults = resultsToStore.filter((r: any) => r.pdf && !r.error);
      if (successfulResults.length > 0 && successfulResults[0].pdf) {
        localStorage.setItem("filledData", JSON.stringify({
          pdf: successfulResults[0].pdf,
          docx: successfulResults[0].docx,
        }));
      }

      const successCount = successfulResults.length;
      const errorCount = resultsToStore.length - successCount;
      if (errorCount > 0) {
        setProgressMessage(`Completed: ${successCount} succeeded, ${errorCount} failed`);
      } else {
        setProgressMessage(`All ${successCount} files processed successfully!`);
      }

      setProgress(100);
      setProgressMessage("Batch processing completed!");

      await new Promise((r) => setTimeout(r, 500));
      navigate("/preview");
    } catch (err: any) {
      console.error("Upload/Fill error:", err);
      setProgressMessage("Error occurred!");
      setProgress(0);
      toast.error(`Error: ${err.response?.data?.detail || err.message}`);
    } finally {
      setLoading(false);
      if (eventSourceRef.current) {
        eventSourceRef.current.close();
        eventSourceRef.current = null;
      }
    }
  };

  const getProgressLabel = () => {
    if (progress === 0) return "0%";
    if (progress < 100) return `${Math.round(progress)}%`;
    return "Done!";
  };

  return (
    <div className="home-container">
      <form onSubmit={handleSubmit} className="home-form">
        <div className="cards-wrapper">
          <div className="card">
            <h2>Select Template</h2>
            {(() => {
              const categories = getChildFolders(templatesByFolder);
              const selectedCategory = selectedFolderPath[0] || "";
              const departments = selectedCategory
                ? getChildFolders(templatesByFolder[selectedCategory])
                : [];
              const selectedDepartment = selectedFolderPath[1] || "";
              const types = selectedCategory && selectedDepartment
                ? getChildFolders(templatesByFolder[selectedCategory]?.[selectedDepartment])
                : [];
              const selectedType = selectedFolderPath[2] || "";

              return (
                <>
                  <div className="form-group">
                    <label htmlFor="categorySelect">Category:</label>
                    <select
                      id="categorySelect"
                      className="form-select"
                      value={selectedCategory}
                      onChange={(e) => {
                        const value = e.target.value;
                        const newPath = value ? [value] : [];
                        setSelectedFolderPath(newPath);
                        setDocChoice("");
                      }}
                    >
                      <option value="">-- Select category --</option>
                      {categories.map((category: string) => (
                        <option key={category} value={category}>
                          {category}
                        </option>
                      ))}
                    </select>
                  </div>

                  <div className="form-group">
                    <label htmlFor="departmentSelect">Department:</label>
                    <select
                      id="departmentSelect"
                      className="form-select"
                      value={selectedDepartment}
                      onChange={(e) => {
                        const value = e.target.value;
                        const newPath = selectedCategory ? [selectedCategory] : [];
                        if (value) newPath.push(value);
                        setSelectedFolderPath(newPath);
                        setDocChoice("");
                      }}
                      disabled={!selectedCategory}
                    >
                      <option value="">-- Select department --</option>
                      {departments.map((department: string) => (
                        <option key={department} value={department}>
                          {department}
                        </option>
                      ))}
                    </select>
                  </div>

                  {types.length > 0 && (
                    <div className="form-group">
                      <label htmlFor="typeSelect">Type of Document:</label>
                      <select
                        id="typeSelect"
                        className="form-select"
                        value={selectedType}
                        onChange={(e) => {
                          const value = e.target.value;
                          const newPath = selectedCategory ? [selectedCategory] : [];
                          if (selectedDepartment) newPath.push(selectedDepartment);
                          if (value) newPath.push(value);
                          setSelectedFolderPath(newPath);
                          setDocChoice("");
                        }}
                        disabled={!selectedDepartment}
                      >
                        <option value="">-- Select type --</option>
                        {types.map((type: string) => (
                          <option key={type} value={type}>
                            {type}
                          </option>
                        ))}
                      </select>
                    </div>
                  )}
                </>
              );
            })()}

            {(() => {
              const selectedNode = getNodeAtPath(templatesByFolder, selectedFolderPath);
              const files = getFilesForNode(selectedNode, selectedFolderPath);
              if (files.length === 0) return null;
              return (
              <div className="form-group">
                <label htmlFor="docSelect">Select Template File:</label>
                <select
                  id="docSelect"
                  className="form-select"
                  value={docChoice}
                  onChange={(e) => setDocChoice(e.target.value)}
                >
                  <option value="">-- Choose a template --</option>
                  {files.map((file: any) => (
                    <option key={file.value} value={file.value}>
                      {file.label}
                    </option>
                  ))}
                </select>
              </div>
              );
            })()}
          </div>

          <div className="card">
            <h2>Upload Data Source</h2>
            <div className="file-upload-area">
              <div className="file-input-wrapper">
                <input
                  type="file"
                  accept=".xlsx,.docx"
                  multiple
                  onChange={(e) => {
                    const files = Array.from(e.target.files || []) as File[];
                    if (files.length > 0) {
                      setDataSources(files);
                      setDataSource(files[0]);
                    }
                  }}
                />
              </div>

              {dataSources.length > 0 ? (
                <div className="file-list">
                  <strong>{dataSources.length} file(s) selected:</strong>
                  <ul style={{ marginTop: "5px", paddingLeft: "15px", margin: 0 }}>
                    {dataSources.map((file, idx) => (
                      <li key={idx} style={{marginBottom: '4px'}}>{file.name}</li>
                    ))}
                  </ul>
                </div>
              ) : (
                <div style={{ padding: "20px", textAlign: "center", color: "#999", fontSize: "13px" }}>
                  No file chosen
                </div>
              )}
            </div>
          </div>
        </div>

        <div className="action-area">
          {!loading && (
            <button type="submit" className="upload-btn">
              Upload and Fill Document
            </button>
          )}

          {loading && (
            <div className="progress-container">
              <div className="progress-bar-wrapper">
                <div
                  className="progress-bar-fill"
                  style={{ width: `${progress}%` }}
                >
                  <span className="progress-text">{getProgressLabel()}</span>
                </div>
              </div>
              <p className="progress-message">{progressMessage}</p>
            </div>
          )}
        </div>
      </form>
    </div>
  );
}

export default Home;


and then the user selects the template, it has a pop up of Excel-DS, and when the user selects the Upload and fill, it has fill the selected template as well the Word-DS which is matched with the selected template. 

and when it goes to the edit and review panel, it has show that excel and the headings extracting for each section and when the user clicks on those section it has open on the right side with the CKEditor with all these options
For document editing workflows, use these plugins.

Core Editing
Paragraph
Heading
Bold
Italic
Underline
BlockQuote

Structure
Lists
Indent
Alignment

Document Features
Table
Table Toolbar
Table Properties
Media
Image
Image Upload
Image Resize

Productivity
Undo / Redo
Find & Replace
Word Count

Document Formatting
Highlight
Font Size
Font Family

and when the user updates, on those panel, it has to reflects exactly as it

You are a senior full-stack engineer working on Veritascribe — a pharmaceutical
document drafting platform.

STACK:
  Frontend : React + TypeScript + Vite (ai_drafting_ui)
  Backend  : FastAPI + Python (ai_drafting_api)
  Storage  : Azure Blob Storage (two containers: Word-DS, Excel-DS)
  Database : Azure SQL via SQLAlchemy
  Auth     : JWT with refresh tokens

BLOB STRUCTURE (both containers mirror each other):
  Word-DS  → contains .docx templates
  Excel-DS → contains .xlsx data sources
  Paths are IDENTICAL except file extension
  Example:
    Word-DS:  "API/Production/SOPs/Equipment usage log book.docx"
    Excel-DS: "API/Production/SOPs/Equipment usage log book.xlsx"

EXISTING TABLES:
  VeritascribeUsers                 → UserSEQ, UserID, Email, FirstName, LastName
  VeritascribeDocuments             → DocumentSEQ, UserSEQ, FileName, Status,
                                      TemplateSEQ, WorkingBlobPath, LastOpenedDate
  VeritascribeTemplates             → TemplateSEQ, TemplateName, BlobPath
  VeritascribeDatasources           → DatasourceSEQ, UserSEQ, FileName, BlobPath
  VeritascribeDocumentDatasourceMap → MapSEQ, DocumentSEQ, DatasourceSEQ
  VeritascribeEditSessions          → SessionSEQ, DocumentSEQ, UserSEQ,
                                      StateJson, Status, LastActiveDate

KEY EXISTING FILES:
  Frontend : src/pages/Home.tsx
             src/pages/Preview.tsx
             src/pages/Dashboard.tsx
             src/api/api.ts
  Backend  : main.py
             routers/documents.py
             services/document_service.py
             azure_db/document_crud.py
             azure_db/model.py
             blob_service.py

RULES:
  - Do NOT change auth logic, blob container names, or existing API contracts
  - Do NOT change any existing table column types
  - Always preserve existing working functionality
  - Use existing blob_service.py pattern for all blob access
  - Use existing azure_db/database.py for all DB Session usage
  - Register all new routes BEFORE any catch-all path routes in routers

TWO CORE BEHAVIORS TO UNDERSTAND:
  1. Excel data source fills the ENTIRE document globally — no section
     restrictions. Every placeholder in the Word template that matches
     any cell value in the Excel file must be replaced, regardless of
     which sheet it comes from or which section of the document it is in.

  2. The Edit & Review panel shows the document split by sections.
     Each section maps to one Excel sheet. The panel has a "Preview
     Data" button that opens a popup showing the Excel sheet data as
     a clean Form (label: value pairs). Dates must display without
     timestamps (YYYY-MM-DD only, never datetime strings).
```

---

## PART 1 — DB Schema Changes

### Run these first in Azure SQL before any code changes

```sql
ALTER TABLE VeritascribeDatasources
  ADD SheetNamesJson NVARCHAR(MAX) NULL;

ALTER TABLE VeritascribeTemplates
  ADD MatchedDatasourcePath NVARCHAR(500) NULL;
```

**Prompt:**

```
Update azure_db/model.py to reflect the two new columns added to Azure SQL.

ADD to VeritascribeDatasources model:
  SheetNamesJson = Column(NVARCHAR(None), nullable=True)
  -- stores JSON array of sheet names e.g. '["Sheet1","Sheet2"]'
  -- NULL means not yet cached

ADD to VeritascribeTemplates model:
  MatchedDatasourcePath = Column(String(500), nullable=True)
  -- stores the auto-derived Excel-DS path for this template
  -- e.g. "API/Production/SOPs/Equipment usage log book.xlsx"

Show the complete updated model.py with only these two additions.
Do not change any other existing columns or models.
```

---

## PART 2 — Backend: Global Document Fill Service

**Prompt:**

```
In ai_drafting_api, update or create services/document_fill_service.py

This service handles filling the ENTIRE Word document from ALL sheets
in the Excel data source. There are NO section restrictions — every
placeholder in the entire .docx must be resolved against ALL cells
across ALL sheets in the Excel file.

class DocumentFillService:

  def extract_all_values(self, xlsx_bytes: bytes) -> dict:
    """
    Open xlsx with openpyxl.
    Iterate through EVERY sheet, EVERY row, EVERY cell.
    Build a single flat dictionary of ALL key-value pairs:
      {
        "{{FieldName}}": "value",
        "{{CompanyName}}": "Acme Corp",
        "{{Date}}": "2026-03-16",   ← date only, NO time component
        ...
      }

    Rules for building the key:
      - Column A of each row = the placeholder key
        (wrap in {{ }} if not already wrapped)
      - Column B of each row = the value
      - If value is a datetime or date object:
          format as "YYYY-MM-DD" string only
          NEVER include time: no "T00:00:00", no " 00:00:00"
      - If value is None or empty: store as empty string ""
      - If same key exists in multiple sheets:
          later sheet overwrites earlier sheet (last-write wins)
      - Keys are case-insensitive for matching purposes
        but preserve original casing in the dict

    Return the flat dict of all extracted values.
    """

  def fill_document(self, docx_bytes: bytes,
                    values: dict) -> bytes:
    """
    Open the .docx with python-docx.
    Replace ALL placeholder occurrences throughout the ENTIRE document:

    Scope of replacement (no restrictions):
      - All paragraphs in the main document body
      - All paragraphs in all table cells (every row, every column)
      - All headers and footers
      - All text boxes if accessible via xml

    Replacement logic:
      - For each paragraph, get full text by joining all runs
      - If any placeholder key exists in the paragraph text:
          Rebuild the paragraph runs preserving formatting of the
          FIRST run that contains the placeholder
          Replace placeholder text with the value
      - Handle split placeholders: if {{ is in one run and }} in the
          next, merge runs first before replacement
      - After replacement, if value was originally a date:
          ensure no timestamp is appended

    Return updated docx as bytes.
    """

  def process(self, docx_bytes: bytes,
              xlsx_bytes: bytes) -> bytes:
    """
    1. Call extract_all_values(xlsx_bytes) → values dict
    2. Call fill_document(docx_bytes, values) → filled docx bytes
    3. Return filled docx bytes
    """

CRITICAL DATE HANDLING:
  When reading Excel cells:
    - openpyxl returns dates as datetime objects
    - Always call .date() or format with strftime("%Y-%m-%d")
    - Never use str() on a datetime directly
    - Never use isoformat() on a datetime (adds T00:00:00)
    - Strip any time component regardless of source

Show the complete services/document_fill_service.py.
```

---

## PART 3 — Backend: DB-First Datasource Resolver Service

**Prompt:**

```
In ai_drafting_api, create services/datasource_resolver.py

This service implements DB-first fetching for Excel-DS files.
Checks the database before going to blob storage, caching results
so repeated calls are fast.

class DatasourceResolver:

  async def resolve(self, excel_path: str, db: Session) -> dict:
    """
    1. Query VeritascribeDatasources WHERE BlobPath = excel_path
    2. If row found AND SheetNamesJson is NOT NULL:
         return {
           "blob_path": row.BlobPath,
           "sheets": json.loads(row.SheetNamesJson),
           "source": "db_cache"
         }
    3. If row found BUT SheetNamesJson IS NULL:
         a. Fetch xlsx bytes from Azure Blob (Excel-DS container)
         b. Open with openpyxl, extract sheet names in order
         c. UPDATE row: SheetNamesJson = json.dumps(sheets)
         d. db.commit()
         e. return { "blob_path", "sheets", "source": "db_partial" }
    4. If row NOT found:
         a. Fetch xlsx bytes from Azure Blob (Excel-DS container)
         b. Open with openpyxl, extract sheet names in order
         c. INSERT new VeritascribeDatasources row:
              DatasourceSEQ = uuid4()
              BlobPath = excel_path
              FileName = excel_path.split("/")[-1]
              SheetNamesJson = json.dumps(sheets)
              UploadedDate = datetime.utcnow()
              UserSEQ = None
         d. db.commit()
         e. return { "blob_path", "sheets", "source": "blob_fresh" }
    5. If blob does not exist:
         raise HTTPException(404, f"Datasource not found: {excel_path}")
    """

  async def get_sheet_form_data(self,
                                 excel_path: str,
                                 sheet_name: str,
                                 db: Session) -> list:
    """
    Fetch xlsx from blob (Excel-DS container).
    Open with openpyxl, access sheet by sheet_name.
    If sheet not found: raise HTTPException(404, "Sheet not found")

    Read rows and build a list of form fields:
      - Column A = label (field name)
      - Column B = value
      - Skip rows where both A and B are empty
      - For date/datetime values: format as "YYYY-MM-DD" ONLY
        Never include time component
      - For None values: use empty string ""
      - For numeric values: convert to string without trailing .0
        if the number is a whole number

    Return:
      [
        { "label": "Name", "value": "John Smith" },
        { "label": "Company", "value": "Acme Corp" },
        { "label": "Date", "value": "2026-03-16" },
        ...
      ]

    This is used to render the Preview Data popup as a form.
    """

  async def get_sheet_content(self,
                               excel_path: str,
                               sheet_name: str,
                               db: Session) -> dict:
    """
    Same as get_sheet_form_data but also returns rendered HTML table.
    Return:
      {
        "sheet": sheet_name,
        "fields": [ { "label": ..., "value": ... } ],
        "html": "<table>...</table>"
      }

    HTML table rules:
      - border-collapse: collapse; width: 100%; font-size: 13px
      - th: border: 1px solid #ddd; padding: 8px 12px;
            background: #f5f5f5; font-weight: 500; text-align: left
      - td: border: 1px solid #ddd; padding: 6px 10px
      - First row → thead, remaining rows → tbody
      - Skip entirely empty rows
    """

Use existing blob_service.py pattern for all blob access.
Show the complete services/datasource_resolver.py.
```

---

## PART 4 — Backend: New API Endpoints

**Prompt:**

```
In routers/documents.py, add all new routes below.
Import DatasourceResolver and DocumentFillService at the top.
Register ALL new routes BEFORE any existing catch-all path routes.

ROUTE 1 — Resolve datasource (DB-first):
  GET /api/datasources/resolve/{path:path}
  - Calls resolver.resolve(path, db)
  - Returns: { "blob_path": str, "sheets": list[str], "source": str }
  - Auth: current_user required

ROUTE 2 — Get sheet form data (for Preview Data popup):
  GET /api/datasources/sheet-form/{path:path}?sheet={name}
  - Query param: sheet (str, required)
  - Calls resolver.get_sheet_form_data(path, sheet, db)
  - Returns: { "sheet": str, "fields": [{"label": str, "value": str}] }
  - Auth: current_user required
  - Purpose: powers the Preview Data popup in Edit & Review panel
    showing Excel data as clean form fields (no timestamps on dates)

ROUTE 3 — Get sheet content with HTML:
  GET /api/datasources/sheet-content/{path:path}?sheet={name}
  - Query param: sheet (str, required)
  - Calls resolver.get_sheet_content(path, sheet, db)
  - Returns: { "sheet": str, "fields": list, "html": str }
  - Auth: current_user required

ROUTE 4 — Get raw datasource file:
  GET /api/datasources/file/{path:path}
  - Fetches raw xlsx bytes from Azure Blob (Excel-DS container)
  - Returns StreamingResponse with content-type:
    application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
  - Auth: current_user required

ROUTE 5 — Fill entire document globally:
  POST /api/fill-global/{session_id}
  - Auth: current_user required
  - Body: multipart/form-data with field "data" = xlsx file
  - Steps:
      1. Look up session from VeritascribeEditSessions by session_id
      2. Get WorkingBlobPath from VeritascribeDocuments
      3. Download the .docx from Azure Blob
      4. Download the .xlsx from the "data" field (or from
         VeritascribeDocumentDatasourceMap if already linked)
      5. Call DocumentFillService.process(docx_bytes, xlsx_bytes)
         This replaces ALL placeholders across the ENTIRE document
         from ALL sheets — no section restrictions whatsoever
      6. Save filled .docx back to Azure Blob (overwrite WorkingBlobPath)
      7. Regenerate PDF using existing PdfService
      8. UPDATE VeritascribeDocuments.UpdatedDate = datetime.utcnow()
      9. db.commit()
  - Return:
    {
      "session_id": str,
      "pdf_sas_url": str,
      "docx_sas_url": str,
      "placeholders_filled": int  ← count of replacements made
    }

ROUTE 6 — Lightweight document list:
  GET /api/documents/list
  - Auth: current_user required
  - Query VeritascribeDocuments WHERE UserSEQ = current_user.UserSEQ
    AND IsActive = true
    ORDER BY LastOpenedDate DESC NULLS LAST, CreatedDate DESC
  - LEFT JOIN VeritascribeTemplates ON TemplateSEQ → get TemplateName
  - Return ONLY (zero blob calls, zero SAS URL generation):
    [
      {
        "document_id": str(DocumentSEQ),
        "file_name": FileName,
        "status": Status,
        "created_date": CreatedDate.isoformat(),
        "updated_date": UpdatedDate.isoformat() if exists else None,
        "last_opened_date": LastOpenedDate.isoformat() if exists else None,
        "template_name": TemplateName or None
      }
    ]
  - Use Pydantic response model: DocumentListItem
  - Pure DB query — must respond in under 200ms

ROUTE 7 — Lazy document details:
  GET /api/documents/{document_id}/details
  - Auth: current_user required
  - Verify document belongs to current_user else 403
  - Steps:
      1. Fetch document row from VeritascribeDocuments
      2. Generate SAS URL for WorkingBlobPath (docx)
      3. Generate SAS URL for the associated PDF
      4. Query VeritascribeEditSessions for latest active session
         WHERE DocumentSEQ = document_id ORDER BY CreatedDate DESC
      5. Query VeritascribeDocumentDatasourceMap → VeritascribeDatasources
         to get linked excel BlobPath
      6. Call resolver.resolve(excel_path, db) → get sheet names
      7. UPDATE VeritascribeDocuments.LastOpenedDate = datetime.utcnow()
      8. db.commit()
  - Return:
    {
      "document_id": str,
      "file_name": str,
      "status": str,
      "docx_sas_url": str,
      "pdf_sas_url": str,
      "edit_session_id": str or None,
      "session_state": dict or None,
      "excel_path": str,
      "sheets": list[str],
      "template_name": str or None
    }

ROUTE 8 — Save section edits from CKEditor:
  POST /api/edit/section
  Request body (Pydantic model SectionEditRequest):
    session_id:   str
    sheet_name:   str
    html_content: str
  - Auth: current_user required
  - Steps:
      1. Look up VeritascribeEditSessions by session_id
      2. Get WorkingBlobPath from VeritascribeDocuments
      3. Download the working .docx from Azure Blob
      4. Use python-docx + BeautifulSoup4 to:
           a. Parse html_content into paragraphs and tables
           b. Find the section in .docx matching sheet_name
              (match by heading text or bookmark)
           c. Replace that section content preserving surrounding formatting
      5. Save updated .docx back to Azure Blob (overwrite WorkingBlobPath)
      6. Regenerate PDF using existing PdfService
      7. UPDATE VeritascribeDocuments.UpdatedDate = datetime.utcnow()
      8. db.commit()
  - Return:
    {
      "success": true,
      "session_id": str,
      "pdf_sas_url": str,
      "docx_sas_url": str
    }

Also add to azure_db/document_crud.py:
  - get_documents_list(user_seq, db) → list
  - get_document_details(document_id, user_seq, db) → dict
  - update_last_opened(document_id, db) → None

Show the complete additions to routers/documents.py and document_crud.py.
```

---

## PART 5 — Frontend: api.ts — Typed Helpers

**Prompt:**

```
Add the following typed helpers and types to src/api/api.ts.
Do not remove or change any existing functions.

ADD TYPES:

export type DocumentListItem = {
  document_id: string;
  file_name: string;
  status: 'InProgress' | 'Completed';
  created_date: string;
  updated_date: string | null;
  last_opened_date: string | null;
  template_name: string | null;
};

export type DocumentDetails = {
  document_id: string;
  file_name: string;
  status: string;
  docx_sas_url: string;
  pdf_sas_url: string;
  edit_session_id: string | null;
  session_state: Record<string, any> | null;
  excel_path: string;
  sheets: string[];
  template_name: string | null;
};

export type SheetFormField = {
  label: string;
  value: string;
  // value is always a clean string — dates are "YYYY-MM-DD" never datetime
};

ADD FUNCTIONS:

// Resolve Excel-DS path via DB-first cache
export const resolveDatasource = (excelPath: string) =>
  API.get<{ blob_path: string; sheets: string[]; source: string }>(
    `/api/datasources/resolve/${encodeURIComponent(excelPath)}`
  );

// Get sheet data as clean form fields (for Preview Data popup)
// Dates come back as "YYYY-MM-DD" strings, never with timestamps
export const getSheetFormData = (excelPath: string, sheet: string) =>
  API.get<{ sheet: string; fields: SheetFormField[] }>(
    `/api/datasources/sheet-form/${encodeURIComponent(excelPath)}`,
    { params: { sheet } }
  );

// Get sheet content with HTML table (for CKEditor population)
export const getSheetContent = (excelPath: string, sheet: string) =>
  API.get<{ sheet: string; fields: SheetFormField[]; html: string }>(
    `/api/datasources/sheet-content/${encodeURIComponent(excelPath)}`,
    { params: { sheet } }
  );

// Fetch raw xlsx file bytes for FormData upload
export const fetchDatasourceFile = (excelPath: string) =>
  API.get(
    `/api/datasources/file/${encodeURIComponent(excelPath)}`,
    { responseType: 'blob' }
  );

// Lightweight document list — no blob calls, fast
export const getDocumentList = () =>
  API.get<DocumentListItem[]>('/api/documents/list');

// On-demand document details — called only on click
export const getDocumentDetails = (documentId: string) =>
  API.get<DocumentDetails>(`/api/documents/${documentId}/details`);

// Save CKEditor section edits
export const saveSectionEdit = (payload: {
  session_id: string;
  sheet_name: string;
  html_content: string;
}) =>
  API.post<{ success: boolean; pdf_sas_url: string; docx_sas_url: string }>(
    '/api/edit/section',
    payload
  );

Show the complete updated src/api/api.ts.
```

---

## PART 6 — Frontend: Home.tsx

**Prompt:**

```
Completely rewrite src/pages/Home.tsx.
Remove all file upload logic. Replace with blob-based auto-matching
and DB-first datasource resolution.

STATE:
  docChoice:          string      // selected Word-DS path
  matchedExcelPath:   string      // derived Excel-DS path (.docx → .xlsx)
  matchedExcelName:   string      // display name of selected template
  resolvedSheets:     string[]    // sheet names returned from /resolve
  resolveSource:      string      // "db_cache" | "db_partial" | "blob_fresh"
  resolveLoading:     boolean     // true while /resolve call is in-flight
  selectedFolderPath: string[]    // [category, department?, type?]
  templatesByFolder:  any         // loaded from /templates.json or API
  loading:            boolean     // submit in progress
  progress:           number      // 0–100
  progressMessage:    string      // human-readable status text

REMOVE entirely:
  - userDoc, dataSource, dataSources state
  - The "Upload Data Source" card with <input type="file">
  - All File upload UI and related handlers

TEMPLATE SELECTION:
  Keep existing cascading dropdowns unchanged:
    Category → Department → Type of Document → Template File

  When template file is selected, call handleTemplateSelect(wordPath, displayName):
    1. setDocChoice(wordPath)
    2. const excelPath = wordPath.replace(/\.docx$/i, ".xlsx")
       setMatchedExcelPath(excelPath)
       setMatchedExcelName(displayName)
    3. setResolveLoading(true)
    4. Call resolveDatasource(excelPath) from api.ts
    5. On success:
         setResolvedSheets(response.data.sheets)
         setResolveSource(response.data.source)
         setResolveLoading(false)
    6. On error:
         toast.error("Could not load data source")
         setResolveLoading(false)

DATA SOURCE CARD (replaces upload card):
  Title: "Data Source"

  State: no template selected →
    Show muted text: "Select a template above to auto-load its data source"

  State: resolveLoading true →
    Show spinner + text "Loading data source..."

  State: resolvedSheets.length > 0 →
    Show green-tinted info box:
      - Simple spreadsheet SVG icon (green)
      - matchedExcelName in bold
      - matchedExcelPath in small muted text
      - Green "Auto-matched" badge
      - "Sheets: Sheet1, Sheet2, ..." in small muted text
      - Source badge:
          resolveSource === "db_cache"   → "Loaded from cache" (blue badge)
          resolveSource === "blob_fresh" → "Loaded from file"  (grey badge)

handleSubmit:
  1. If !docChoice: toast.error("Please select a template"), return
  2. If !matchedExcelPath: toast.error("No data source found"), return
  3. Animate progress to 15%
  4. setProgressMessage("Fetching Word template...")
  5. GET /api/templates/{encodeURIComponent(docChoice)} responseType: blob
  6. setProgress(25), setProgressMessage("Fetching data source file...")
  7. Call fetchDatasourceFile(matchedExcelPath) from api.ts
  8. Convert both to File objects with correct names and MIME types
  9. setProgress(35), setProgressMessage("Uploading...")
  10. Build FormData: append "template" + "dataSource" files
  11. POST /api/upload (unchanged)
  12. Store in sessionStorage:
        "sessionId"       → uploadData.session_id
        "editSessionId"   → uploadData.edit_session_id
        "documentId"      → uploadData.document_id
        "docxSasUrl"      → uploadData.sas_url
        "pdfSasUrl"       → uploadData.pdf_sas_url
        "excelDsPath"     → matchedExcelPath
        "resolvedSheets"  → JSON.stringify(resolvedSheets)
        "datasourceName"  → excelFile.name
  13. setProgress(50), setProgressMessage("Filling document...")
  14. POST /api/fill/{sessionId} with FormData containing excel file
      (this is the GLOBAL fill — all placeholders, all sheets, no restrictions)
  15. Store results in localStorage (unchanged)
  16. setProgress(100), setProgressMessage("Document ready!")
  17. await 400ms, navigate("/preview")

Show the complete rewritten src/pages/Home.tsx.
```

---

## PART 7 — Frontend: Dashboard.tsx — Two-Phase Lazy Loading

**Prompt:**

```
Rewrite src/pages/Dashboard.tsx with two-phase lazy loading.
Dashboard must render skeleton immediately, then list, then only
fetch full details when user clicks a specific document.

TYPES (import from api.ts):
  DocumentListItem, DocumentDetails

STATE:
  documents:   DocumentListItem[]  // Phase A result
  loadingId:   string | null       // documentId currently in Phase B
  listLoading: boolean             // Phase A in progress
  listError:   string | null       // Phase A error

PHASE A — On mount:
  1. setListLoading(true)
  2. Call getDocumentList() from api.ts
  3. On success: setDocuments(response.data), setListLoading(false)
  4. On error: setListError("Failed to load documents"), setListLoading(false)

SKELETON STATE (while listLoading is true):
  Render 4 placeholder cards with shimmer animation:
    Each card has:
      - Grey animated bar (60% width, 16px height) for title
      - Grey animated bar (40% width, 12px height) for date
      - Grey animated pill (80px width, 22px height) for status
    CSS animation:
      @keyframes shimmer {
        0%,100% { opacity: 0.4 }
        50%      { opacity: 0.9 }
      }
      animation: shimmer 1.4s ease-in-out infinite
      Stagger: animation-delay 0s, 0.15s, 0.3s, 0.45s
      Background: var(--color-background-secondary)
      Border-radius: 8px

DOCUMENT LIST CARDS (once loaded):
  Each card shows:
    - FileName truncated to 40 chars + "..." if longer
    - Status badge:
        InProgress → background #FAEEDA, text #854F0B (amber)
        Completed  → background #EAF3DE, text #3B6D11 (green)
    - CreatedDate formatted as "Mar 12, 2026"
    - LastOpenedDate as relative time:
        null       → "Never opened"
        < 1 hour   → "Just now"
        < 24 hours → "X hours ago"
        < 7 days   → "X days ago"
        else       → formatted date string
    - TemplateName in small muted text (if not null)
    - If loadingId === document.document_id:
        Show small inline spinner on this card only
        Disable click

PHASE B — handleDocumentOpen(documentId: string):
  1. If loadingId !== null: return (prevent double click)
  2. setLoadingId(documentId)
  3. Call getDocumentDetails(documentId) from api.ts
  4. On success:
       sessionStorage.setItem("sessionId",      details.edit_session_id ?? "")
       sessionStorage.setItem("documentId",     details.document_id)
       sessionStorage.setItem("docxSasUrl",     details.docx_sas_url)
       sessionStorage.setItem("pdfSasUrl",      details.pdf_sas_url)
       sessionStorage.setItem("excelDsPath",    details.excel_path)
       sessionStorage.setItem("resolvedSheets", JSON.stringify(details.sheets))
       sessionStorage.setItem("datasourceName", details.file_name)
       navigate("/preview")
  5. On error:
       setLoadingId(null)
       toast.error("Failed to open document")

DASHBOARD HEADER:
  - "New Document" button → navigate("/")
  - Document count: "X documents" in muted text
  - If listError: show error message + "Retry" button
    that calls getDocumentList() again

Show the complete rewritten src/pages/Dashboard.tsx.
```

---

## PART 8 — Frontend: Preview.tsx — Sheet Nav + Preview Data Popup + CKEditor

**Prompt:**

```
Update src/pages/Preview.tsx for the Edit & Review panel.

INSTALL first (run in ai_drafting_ui):
  npm install @ckeditor/ckeditor5-react @ckeditor/ckeditor5-build-classic

NEW STATE:
  sheets:            string[]         // sheet names from sessionStorage
  activeSheet:       string           // currently selected sheet
  sheetContent:      string           // HTML loaded into CKEditor
  sheetFields:       SheetFormField[] // form fields for Preview Data popup
  sheetLoading:      boolean          // fetching sheet content
  previewOpen:       boolean          // Preview Data popup visible
  previewLoading:    boolean          // fetching form fields for popup
  editorRef:         any              // CKEditor instance ref
  hasChanges:        boolean          // editor modified since last save
  saving:            boolean          // POST /api/edit/section in flight

ON MOUNT:
  1. Read "excelDsPath" from sessionStorage
  2. Read "resolvedSheets" from sessionStorage
  3. If resolvedSheets exists:
       setSheets(JSON.parse(resolvedSheets))
       call handleSheetSelect(sheets[0]) to auto-load first sheet
  4. If resolvedSheets is null but excelDsPath exists:
       Call resolveDatasource(excelDsPath) from api.ts
       setSheets(response.data.sheets)
       call handleSheetSelect(response.data.sheets[0])

handleSheetSelect(sheetName: string):
  1. If hasChanges:
       Show confirm dialog: "You have unsaved changes. Leave this sheet?"
       If user cancels: return
  2. setActiveSheet(sheetName)
  3. setSheetLoading(true)
  4. const excelDsPath = sessionStorage.getItem("excelDsPath")
  5. Call getSheetContent(excelDsPath, sheetName) from api.ts
  6. setSheetContent(response.data.html)
  7. setSheetFields(response.data.fields)
  8. setSheetLoading(false)
  9. setHasChanges(false)

handlePreviewData():
  Purpose: open Preview Data popup for the active sheet.
  The popup shows Excel data as a clean form — NOT a table.
  Dates must show as "YYYY-MM-DD" NEVER as datetime strings.

  1. If sheetFields already loaded (from handleSheetSelect): 
       setPreviewOpen(true) immediately (no extra API call needed)
  2. If sheetFields is empty:
       setPreviewLoading(true)
       const excelDsPath = sessionStorage.getItem("excelDsPath")
       Call getSheetFormData(excelDsPath, activeSheet) from api.ts
       setSheetFields(response.data.fields)
       setPreviewLoading(false)
       setPreviewOpen(true)

PREVIEW DATA POPUP component:
  Trigger: "Preview Data" button in the right panel header
  Style: modal overlay (semi-transparent dark background)
         centered white card, max-width 480px, max-height 80vh,
         scrollable if content overflows

  Header:
    - Title: "Data Preview — {activeSheet}"
    - Close button (×) top right → setPreviewOpen(false)

  Body (if previewLoading): show centered spinner

  Body (if fields loaded):
    Render sheetFields as a clean vertical form layout:
    Each field renders as:

      <div class="preview-field">
        <span class="preview-label">{field.label}</span>
        <span class="preview-value">{field.value || "—"}</span>
      </div>

    Styles:
      .preview-field:
        display: flex
        justify-content: space-between
        align-items: flex-start
        padding: 10px 0
        border-bottom: 1px solid var(--color-border-tertiary)
        gap: 16px

      .preview-label:
        font-size: 13px
        font-weight: 500
        color: var(--color-text-secondary)
        min-width: 140px
        flex-shrink: 0

      .preview-value:
        font-size: 13px
        color: var(--color-text-primary)
        text-align: right
        word-break: break-word

    CRITICAL DATE RULE:
      field.value for any date field comes from the backend already
      formatted as "YYYY-MM-DD". Do NOT apply any further Date()
      parsing or formatting in the frontend. Render the string as-is.
      Never call new Date(field.value).toLocaleDateString() or similar.

  Footer:
    - "Close" button → setPreviewOpen(false)

LEFT PANEL — Sheet navigation:
  Render sheets[] as a vertical list.
  Each item:
    - Sheet name as label
    - onClick: handleSheetSelect(sheetName)
    - Active state: left border accent color, light background
    - Hover: subtle background highlight
    - Cursor: pointer
  Replace whatever was previously in the left section navigation.

RIGHT PANEL — Controls and CKEditor:
  If no activeSheet:
    Show centered placeholder: "Select a section from the left panel"

  If sheetLoading:
    Show centered spinner

  If activeSheet loaded:

    Header row (flex, space-between):
      Left: active sheet name in bold
      Right: two buttons side by side:
        Button 1 — "Preview Data"
          - onClick: handlePreviewData()
          - Style: outlined/secondary button
          - Shows previewLoading spinner if previewLoading is true
        Button 2 — "Save Changes"
          - onClick: handleSaveChanges()
          - Disabled if !hasChanges or saving
          - Shows "Saving..." if saving is true
          - Style: primary/filled button

    CKEditor:
      import { CKEditor } from '@ckeditor/ckeditor5-react'
      import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

      <CKEditor
        editor={ClassicEditor}
        data={sheetContent}
        config={{
          toolbar: [
            'heading', '|',
            'bold', 'italic', 'underline', '|',
            'blockQuote', '|',
            'bulletedList', 'numberedList', 'indent', 'outdent', '|',
            'alignment', '|',
            'insertTable', '|',
            'mediaEmbed', 'imageUpload', 'imageResize', '|',
            'undo', 'redo', '|',
            'findAndReplace', '|',
            'highlight', 'fontSize', 'fontFamily', 'fontColor'
          ]
        }}
        onReady={(editor) => { editorRef.current = editor }}
        onChange={() => setHasChanges(true)}
      />

handleSaveChanges():
  1. setSaving(true)
  2. const html = editorRef.current.getData()
  3. const sessionId = sessionStorage.getItem("sessionId")
  4. Call saveSectionEdit({
       session_id: sessionId,
       sheet_name: activeSheet,
       html_content: html
     }) from api.ts
  5. On success:
       sessionStorage.setItem("pdfSasUrl", response.data.pdf_sas_url)
       sessionStorage.setItem("docxSasUrl", response.data.docx_sas_url)
       Increment pdfVersion state (forces PDF viewer reload)
       setHasChanges(false)
       toast.success("Section saved successfully")
  6. On error:
       toast.error("Save failed: " + error.message)
  7. setSaving(false)

beforeunload guard (add on mount, remove on unmount):
  window.addEventListener("beforeunload", (e) => {
    if (hasChanges) e.preventDefault()
  })

Show the complete updated src/pages/Preview.tsx.
```

---

## PART 9 — End-to-End QA Checklist

**Prompt:**

```
Generate a complete manual QA checklist for all Veritascribe changes
across Parts 1–8. Format as a markdown table:

  ID | Area | Test Step | Expected Result | Pass/Fail

Cover these scenarios:

GLOBAL FILL:
  - All placeholders across entire document replaced (not just one section)
  - Placeholders from Sheet1 appear in Section 3 of document correctly
  - Placeholders from Sheet3 appear in Section 1 of document correctly
  - Date placeholders show "2026-03-16" NOT "2026-03-16 00:00:00"
  - Date placeholders show "2026-03-16" NOT "2026-03-16T00:00:00"
  - Empty placeholder cells leave the placeholder blank (not "None")
  - Placeholders in table cells are replaced correctly
  - Placeholders in headers and footers are replaced correctly

PREVIEW DATA POPUP:
  - "Preview Data" button visible in right panel header
  - Clicking it opens the modal popup
  - Popup shows field labels in left column, values in right column
  - Date fields show "YYYY-MM-DD" format only (no time component)
  - Empty fields show "—" instead of blank or "None"
  - Popup is scrollable when fields exceed viewport height
  - Close button (×) and footer "Close" button both dismiss popup
  - Loading spinner shows while fields are being fetched
  - Popup title shows correct active sheet name

DB & BACKEND:
  - ALTER TABLE ran successfully (columns exist in Azure SQL)
  - /resolve returns source: "blob_fresh" on first call
  - /resolve returns source: "db_cache" on second call for same path
  - /sheet-form returns fields with dates as "YYYY-MM-DD"
  - /documents/list responds in under 200ms
  - /documents/{id}/details returns all 10 required fields
  - /edit/section updates .docx and regenerates PDF
  - All new endpoints return 401 without valid JWT

HOME PAGE:
  - Category → Department → Type → Template cascade works
  - Selecting template triggers /resolve call automatically
  - Data Source card shows sheet names and source badge
  - "Loaded from cache" badge on second selection of same template
  - Submit with no template shows error toast
  - No file upload input visible anywhere on the page
  - Progress bar completes to 100% on successful submit

DASHBOARD:
  - Skeleton cards with shimmer animation visible on mount
  - Document list renders with correct amber/green status badges
  - LastOpenedDate shows relative time correctly
  - Clicking a document shows spinner only on that card
  - All 7 sessionStorage keys set after clicking a document
  - Navigation to /preview happens after details load
  - Retry button appears and works when list fetch fails

EDIT & REVIEW PANEL:
  - Left panel shows Excel sheet names on load
  - Clicking a sheet loads content into CKEditor
  - All CKEditor toolbar plugins visible and functional
  - Editing content enables the Save Changes button
  - Save Changes button disabled when no edits made
  - "Saving..." text appears on button during POST
  - PDF viewer reloads after successful save
  - Switching sheets with unsaved changes shows confirm dialog
  - Browser tab close with unsaved changes shows beforeunload warning
```

---

## 🗂️ Complete File Change Summary

| File | Change | Part |
|------|--------|------|
| Azure SQL | 2 ALTER TABLE statements | 1 |
| `azure_db/model.py` | Add 2 new Column fields | 1 |
| `services/document_fill_service.py` | New — global fill, no section restrictions, date stripping | 2 |
| `services/datasource_resolver.py` | New — DB-first resolver + form field builder | 3 |
| `routers/documents.py` | Add 8 new routes | 4 |
| `azure_db/document_crud.py` | Add 3 new helper functions | 4 |
| `src/api/api.ts` | Add 7 helpers + 3 types incl. SheetFormField | 5 |
| `src/pages/Home.tsx` | Full rewrite — no upload, auto-match, DB resolve | 6 |
| `src/pages/Dashboard.tsx` | Full rewrite — skeleton + lazy load | 7 |
| `src/pages/Preview.tsx` | Sheet nav + Preview Data popup + CKEditor | 8 |

---

## ⚡ Strict Implementation Order

```
Step 1  → Run ALTER TABLE in Azure SQL                      (Part 1)
Step 2  → Update model.py                                   (Part 1)
Step 3  → Build document_fill_service.py                    (Part 2)
Step 4  → Build datasource_resolver.py                      (Part 3)
Step 5  → Add all 8 routes to routers/documents.py          (Part 4)
Step 6  → Test all routes in Swagger UI before touching UI  (Part 4)
Step 7  → Update api.ts with helpers and types              (Part 5)
Step 8  → Rewrite Home.tsx                                  (Part 6)
Step 9  → Rewrite Dashboard.tsx                             (Part 7)
Step 10 → Update Preview.tsx with popup + CKEditor          (Part 8)
Step 11 → Run full QA checklist                             (Part 9)
```

Adding AMV data Source-Excel
USE [db-ai-dev-ci-001]
GO
UPDATE [dbo].[VeritascribeTemplates] 
SET [WordDSPath] = 'veritascribe/Word-DS/AMV/Report/REPORT APPROVAL.xlsx'
WHERE [BlobPath] = 'Templates/AMV/Report/REPORT APPROVAL.docx';
GO

Adding AMV data Source-Word
USE [db-ai-dev-ci-001]
GO
UPDATE [dbo].[VeritascribeTemplates] 
SET [WordDSPath] = 'veritascribe/Word-DS/AMV/Report/REPORT APPROVAL.docx'
WHERE [BlobPath] = 'Templates/AMV/Report/REPORT APPROVAL.docx';
GO

Excel-DataSource_Path
USE [db-ai-dev-ci-001]
GO
UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/API/Production/SOPs/Equipment usage log book.xlsx'
WHERE [BlobPath] = 'Templates/API/Production/SOPs/Equipment usage log book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Analytical Department/SOPs/Analytical method transfers.xlsx'
WHERE [BlobPath] = 'Templates/Injectables/Analytical Department/SOPs/Analytical method transfers.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Analytical Department/SOPs/Analytical Method Validation.xlsx'
WHERE [BlobPath] = 'Injectables/Analytical Department/SOPs/Analytical Method Validation.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Analytical Department/SOPs/Dissolution.xlsx'
WHERE [BlobPath] = 'Injectables/Analytical Department/SOPs/Dissolution.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.xlsx'
WHERE [BlobPath] = 'Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Production/SOPs/Additional Material indent.xlsx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Additional Material indent.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Production/SOPs/Aspetic Area Practice.xlsx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Aspetic Area Practice.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.xlsx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Production/SOPs/Equipment Usage Log Book.xlsx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Equipment Usage Log Book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Quality Assurance/SOPs/Handling of Deviations.xlsx'
WHERE [BlobPath] = 'Templates/Injectables/Quality Assurance/SOPs/Handling of Deviations.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Quality Assurance/SOPs/Handling of Returned Goods.xlsx'
WHERE [BlobPath] = 'Injectables/Quality Assurance/SOPs/Handling of Returned Goods.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Injectables/Quality Assurance/SOPs/Internal Audits.xlsx'
WHERE [BlobPath] = 'Injectables/Quality Assurance/SOPs/Internal Audits.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/OSD/Production/SOPs/Entry & exit procedure for pharma area.xlsx'
WHERE [BlobPath] = 'OSD/Production/SOPs/Entry & exit procedure for pharma area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/OSD/Production/SOPs/Equipment usage log book.xlsx'
WHERE [BlobPath] = 'OSD/Production/SOPs/Equipment usage log book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/API/Production/SOPs/Entry & exit procedure for pharma area.xlsx'
WHERE [BlobPath] = 'API/Production/SOPs/Entry & exit procedure for pharma area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.xlsx'
WHERE [BlobPath] = 'API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.xlsx'
WHERE [BlobPath] = 'Templates/API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).xlsx'
WHERE [BlobPath] = 'Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).xlsx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).xlsx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).xlsx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).xlsx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).xlsx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/OSD/Quality Control/Protocols/Photostability.xlsx'
WHERE [BlobPath] = 'Templates/OSD/Quality Control/Protocols/Photostability.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).xlsx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).xlsx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).xlsx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDS (Regulatory API - DS)/RDSTS09 (MSDS).xlsx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSTS09 (MSDS).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).xlsx'
WHERE [BlobPath] = 'Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).xlsx'
WHERE [BlobPath] = 'Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUAT08 (Audit Trigger).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUAT08 (Audit Trigger).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUDD05 (Due Diligence).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUDD05 (Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REULT11 (Language Translation).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REULT11 (Language Translation).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUMA01 (MAA).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMA01 (MAA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUMW10(Medical Writing).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMW10(Medical Writing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUPT03 (PIL Testing).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUPT03 (PIL Testing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUSP06 (Scientific Package).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUSP06 (Scientific Package).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/REU (RA EU)/REUUK07 (UK IRP).xlsx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUUK07 (UK IRP).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).xlsx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).xlsx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).xlsx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).xlsx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).xlsx'
WHERE [BlobPath] = 'Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).xlsx'
WHERE [BlobPath] = 'Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUS5B05 (505B2).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUS5B05 (505B2).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUS5K04 (510K).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUS5K04 (510K).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSAN03 (ANDA).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSAN03 (ANDA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSCC08 (CC).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSCC08 (CC).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSDD09 (Due Diligence).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSDD09 (Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSIN01 (IND).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSIN01 (IND).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSND02 (NDA).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSND02 (NDA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSUA06 (US Agent).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSUA06 (US Agent).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/RUS (RA US)/RUSWP07 (White Paper).xlsx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSWP07 (White Paper).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/Software (RSS)/RSSNE01 (eCTD).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNE01 (eCTD).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/Software (RSS)/RSSNL04 (ELN).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNL04 (ELN).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/Software (RSS)/RSSNP03 (PDF Plugin).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNP03 (PDF Plugin).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [ExcelDSPath] = 'veritascribe/Excel-DS/Proposals/Software (RSS)/RSSNS02 (SPL).xlsx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNS02 (SPL).docx';

GO

-- Verify
SELECT [TemplateName], [BlobPath], [WordDSPath], [ExcelDSPath]
FROM [dbo].[VeritascribeTemplates]
ORDER BY [TemplateName];
GO


Document-DataSource_Path

USE [db-ai-dev-ci-001]
GO

-- Step 1: Add columns
ALTER TABLE [dbo].[VeritascribeTemplates]
ADD [WordDSPath] [nvarchar](500) NULL,
    [ExcelDSPath] [nvarchar](500) NULL;
GO

-- Step 2: Update WordDSPath matching by BlobPath

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSRR10 (US Regulatory Resources).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSCC08 (CC).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSCC08 (CC).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCMA05 (Mock Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUS5K04 (510K).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUS5K04 (510K).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSVA12 (Veternary ANADA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).docx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSMF01 (Publishing of DMFCEPASMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSAN03 (ANDA).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSAN03 (ANDA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).docx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBAW03 (Artwork).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUAT08 (Audit Trigger).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUAT08 (Audit Trigger).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSVN13 (Veternary NADA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUDD05 (Due Diligence).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUDD05 (Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/Software (RSS)/RSSNL04 (ELN).docx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNL04 (ELN).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCQS07 (Quality System Development).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/Software (RSS)/RSSNP03 (PDF Plugin).docx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNP03 (PDF Plugin).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSAF03 (ASMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Production/SOPs/Aspetic Area Practice.docx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Aspetic Area Practice.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSRW06 (DMF RoW).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.docx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Entry & Exit Procedure for Pharma Area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).docx'
WHERE [BlobPath] = 'Proposals/RPV (Regulatory PV)/RPVDS01 (PV Database Support).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).docx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSFP02 (Publishing of ANDANDAANDSNDS505(b2)MAA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).docx'
WHERE [BlobPath] = 'Proposals/REUMW10 (Medical Writing)/REUMW10 (Medical Writing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Analytical Department/SOPs/Analytical Method Validation.docx'
WHERE [BlobPath] = 'Injectables/Analytical Department/SOPs/Analytical Method Validation.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/API/Production/SOPs/Entry & exit procedure for pharma area.docx'
WHERE [BlobPath] = 'API/Production/SOPs/Entry & exit procedure for pharma area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSDD09 (Due Diligence).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSDD09 (Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSCP02 (CEP).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).docx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPM).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/OSD/Production/SOPs/Equipment usage log book.docx'
WHERE [BlobPath] = 'OSD/Production/SOPs/Equipment usage log book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/OSD/Quality Control/Protocols/Photostability.docx'
WHERE [BlobPath] = 'Templates/OSD/Quality Control/Protocols/Photostability.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/Software (RSS)/RSSNE01 (eCTD).docx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNE01 (eCTD).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Production/SOPs/Equipment Usage Log Book.docx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Equipment Usage Log Book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).docx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBOA04 (Original Application).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Analytical Department/SOPs/Analytical method transfers.docx'
WHERE [BlobPath] = 'Templates/Injectables/Analytical Department/SOPs/Analytical method transfers.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSTS09 (MSDS).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSTS09 (MSDS).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Quality Assurance/SOPs/Internal Audits.docx'
WHERE [BlobPath] = 'Injectables/Quality Assurance/SOPs/Internal Audits.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Analytical Department/SOPs/Dissolution.docx'
WHERE [BlobPath] = 'Injectables/Analytical Department/SOPs/Dissolution.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Quality Assurance/SOPs/Handling of Returned Goods.docx'
WHERE [BlobPath] = 'Injectables/Quality Assurance/SOPs/Handling of Returned Goods.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).docx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBSP01 (SPL).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSND02 (NDA).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSND02 (NDA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSTS08 (Toxicology Services).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).docx'
WHERE [BlobPath] = 'Proposals/RRW Biologics&Biosimilars/RRWBS01 (Biologics  Biosimilar ).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).docx'
WHERE [BlobPath] = 'Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services) (2).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/API/Production/SOPs/Equipment usage log book.docx'
WHERE [BlobPath] = 'Templates/API/Production/SOPs/Equipment usage log book.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSWP07 (White Paper).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSWP07 (White Paper).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).docx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSDL03 (Document Level Publishing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).docx'
WHERE [BlobPath] = 'Proposals/RDSTS08 (Toxicology Services)/RDSTS08 (Toxicology Services).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.docx'
WHERE [BlobPath] = 'Templates/API/Warehouse/SOPs/SOP for Receipt and Storage of Raw and Packing Materials in warehouse.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REURR09 (EU Regulatory Resources).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSID04 (SPOR).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCVA01 (Vendor Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCCV08 (Computer System Validation).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).docx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCXP04 (GxP Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUMA01 (MAA).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMA01 (MAA).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REULT11 (Language Translation).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REULT11 (Language Translation).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.docx'
WHERE [BlobPath] = 'Injectables/Engineering/SOPs/Maintenence & calibration of weighing balances SOP.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).docx'
WHERE [BlobPath] = 'Proposals/RLB (Regulatory Labeling)/RLBLL02 (Leaflet).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Quality Assurance/SOPs/Handling of Deviations.docx'
WHERE [BlobPath] = 'Templates/Injectables/Quality Assurance/SOPs/Handling of Deviations.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.docx'
WHERE [BlobPath] = 'API/Production/SOPs/Request, Issuance, Retrieval, Filling and Review of BPR, ECR.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/OSD/Production/SOPs/Entry & exit procedure for pharma area.docx'
WHERE [BlobPath] = 'OSD/Production/SOPs/Entry & exit procedure for pharma area.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNC6S02 (6 Systems Audit).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).docx'
WHERE [BlobPath] = 'Templates/Proposals/QNC (Quality & Compliance)/QNCAT10 (Audit Trigger).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUSP06 (Scientific Package).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUSP06 (Scientific Package).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUUK07 (UK IRP).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUUK07 (UK IRP).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSIN01 (IND).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSIN01 (IND).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/Software (RSS)/RSSNS02 (SPL).docx'
WHERE [BlobPath] = 'Templates/Proposals/Software (RSS)/RSSNS02 (SPL).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUPT03 (PIL Testing).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUPT03 (PIL Testing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUMW10(Medical Writing).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMW10(Medical Writing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUSUA06 (US Agent).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUSUA06 (US Agent).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).docx'
WHERE [BlobPath] = 'Proposals/RPS (Regulatory Publishing & Submission)/RPSCP04 (ClinicalReport Level Publishing).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).docx'
WHERE [BlobPath] = 'Proposals/REU (RA EU)/REUMH02 (MAH + BRS + BTS + QP + QPPV).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).docx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCDD06 (Facility Due Diligence).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).docx'
WHERE [BlobPath] = 'Proposals/QNC (Quality & Compliance)/QNCRS03 (Retainership).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Injectables/Production/SOPs/Additional Material indent.docx'
WHERE [BlobPath] = 'Injectables/Production/SOPs/Additional Material indent.docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).docx'
WHERE [BlobPath] = 'Proposals/RDS (Regulatory API - DS)/RDSMF01 (DMF).docx';

UPDATE [dbo].[VeritascribeTemplates] SET [WordDSPath] = 'veritascribe/Word-DS/Proposals/RUS (RA US)/RUS5B05 (505B2).docx'
WHERE [BlobPath] = 'Proposals/RUS (RA US)/RUS5B05 (505B2).docx';

GO

-- Verify
SELECT [TemplateName], [BlobPath], [WordDSPath]
FROM [dbo].[VeritascribeTemplates]
ORDER BY [TemplateName];
GO
Altering Templates Table:
USE [db-ai-dev-ci-001] GO -- Step 1: Add the two new columns ALTER TABLE [dbo].[VeritascribeTemplates] ADD [WordDSPath] [nvarchar](500) NULL, [ExcelDSPath] [nvarchar](500) NULL; GO

Updated table: ALTER TABLE [dbo].[VeritascribeDatasources]
USE [db-ai-dev-ci-001];
GO

ALTER TABLE [dbo].[VeritascribeDatasources]
ADD [SheetNamesJson] NVARCHAR(MAX) NULL;
GO


/****** Object:  Table [dbo].[VeritascribeUsers]    Script Date: 13-03-2026 16:41:06 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeUsers](
	[UserSEQ] [uniqueidentifier] NOT NULL,
	[UserID] [nvarchar](max) NOT NULL,
	[FirstName] [nvarchar](50) NULL,
	[LastName] [nvarchar](50) NULL,
	[Email] [nvarchar](100) NULL,
	[Mobile] [nvarchar](30) NULL,
	[IsActive] [bit] NULL,
	[Department] [varchar](100) NULL,
	[Designation] [varchar](100) NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime2](7) NULL,
	[UpdatedBy] [nvarchar](50) NULL,
	[UpdatedDate] [datetime2](7) NULL,
	[CountryId] [int] NULL,
	[StateId] [int] NULL,
	[CityId] [int] NULL,
	[Zipcode] [nvarchar](20) NULL,
	[OrganizationName] [nvarchar](100) NULL,
	[JobType] [int] NULL,
	[status] [nvarchar](50) NULL,
	[UserIdentificationNumber] [nvarchar](20) NULL,
	[UserAddress] [nvarchar](200) NULL,
	[MobileCountryCode] [int] NULL,
	[FirstLogin] [datetime] NULL,
	[GSTIN] [nvarchar](50) NULL,
	[DailyLoginDate] [datetime] NULL,
 CONSTRAINT [PK_VeritascribeUsers] PRIMARY KEY CLUSTERED 
(
	[UserSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO



/****** Object:  Table [dbo].[VeritascribeUserPasswords]    Script Date: 13-03-2026 16:41:27 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeUserPasswords](
	[PasswordSEQ] [uniqueidentifier] NOT NULL,
	[UserSEQ] [uniqueidentifier] NOT NULL,
	[PasswordHash] [nvarchar](256) NOT NULL,
	[IsActive] [bit] NOT NULL,
	[CreatedBy] [nvarchar](50) NULL,
	[CreatedDate] [datetime2](7) NOT NULL,
	[UpdatedBy] [nvarchar](50) NULL,
	[UpdatedDate] [datetime2](7) NULL,
	[ExpiryDate] [datetime2](7) NULL,
	[LastPasswordChangeDate] [datetime2](7) NULL,
	[emailotp] [nvarchar](20) NULL,
 CONSTRAINT [PK_VeritascribeUserPasswords] PRIMARY KEY CLUSTERED 
(
	[PasswordSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[VeritascribeUserPasswords] ADD  DEFAULT ((1)) FOR [IsActive]
GO

ALTER TABLE [dbo].[VeritascribeUserPasswords] ADD  DEFAULT (getdate()) FOR [CreatedDate]
GO

ALTER TABLE [dbo].[VeritascribeUserPasswords]  WITH CHECK ADD  CONSTRAINT [FK_VeritascribeUserPasswords_VeritascribeUsers] FOREIGN KEY([UserSEQ])
REFERENCES [dbo].[VeritascribeUsers] ([UserSEQ])
ON DELETE CASCADE
GO

ALTER TABLE [dbo].[VeritascribeUserPasswords] CHECK CONSTRAINT [FK_VeritascribeUserPasswords_VeritascribeUsers]
GO


/****** Object:  Table [dbo].[VeritascribeTemplates]    Script Date: 13-03-2026 16:41:40 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeTemplates](
	[TemplateSEQ] [uniqueidentifier] NOT NULL,
	[TemplateName] [nvarchar](255) NOT NULL,
	[BlobPath] [nvarchar](500) NOT NULL,
	[IsActive] [bit] NULL,
	[CreatedDate] [datetime2](7) NULL,
PRIMARY KEY CLUSTERED 
(
	[TemplateSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[VeritascribeTemplates] ADD  DEFAULT (newid()) FOR [TemplateSEQ]
GO

ALTER TABLE [dbo].[VeritascribeTemplates] ADD  DEFAULT ((1)) FOR [IsActive]
GO

ALTER TABLE [dbo].[VeritascribeTemplates] ADD  DEFAULT (getutcdate()) FOR [CreatedDate]
GO


/****** Object:  Table [dbo].[VeritascribeEditSessions]    Script Date: 13-03-2026 16:41:57 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeEditSessions](
	[SessionSEQ] [uniqueidentifier] NOT NULL,
	[DocumentSEQ] [uniqueidentifier] NOT NULL,
	[UserSEQ] [uniqueidentifier] NOT NULL,
	[StateJson] [varchar](max) NULL,
	[LastCheckpointDate] [datetime] NULL,
	[Status] [varchar](50) NOT NULL,
	[LastActiveDate] [datetime] NOT NULL,
	[CreatedDate] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[SessionSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO


/****** Object:  Table [dbo].[VeritascribeDocuments]    Script Date: 13-03-2026 16:42:09 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeDocuments](
	[DocumentSEQ] [uniqueidentifier] NOT NULL,
	[UserSEQ] [uniqueidentifier] NOT NULL,
	[FileName] [varchar](255) NOT NULL,
	[Status] [varchar](50) NOT NULL,
	[CreatedDate] [datetime] NOT NULL,
	[UpdatedDate] [datetime] NULL,
	[IsActive] [bit] NOT NULL,
	[TemplateSEQ] [uniqueidentifier] NULL,
	[LastOpenedDate] [datetime2](7) NULL,
	[WorkingBlobPath] [nvarchar](500) NULL,
PRIMARY KEY CLUSTERED 
(
	[DocumentSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO


/****** Object:  Table [dbo].[VeritascribeDocumentDatasourceMap]    Script Date: 13-03-2026 16:42:21 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeDocumentDatasourceMap](
	[MapSEQ] [uniqueidentifier] NOT NULL,
	[DocumentSEQ] [uniqueidentifier] NOT NULL,
	[DatasourceSEQ] [uniqueidentifier] NOT NULL,
	[TrackChangeJsonPath] [nvarchar](500) NULL,
	[TrackChangeUpdatedDate] [datetime2](7) NULL,
PRIMARY KEY CLUSTERED 
(
	[MapSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[VeritascribeDocumentDatasourceMap] ADD  DEFAULT (newid()) FOR [MapSEQ]
GO

ALTER TABLE [dbo].[VeritascribeDocumentDatasourceMap]  WITH CHECK ADD FOREIGN KEY([DatasourceSEQ])
REFERENCES [dbo].[VeritascribeDatasources] ([DatasourceSEQ])
GO

ALTER TABLE [dbo].[VeritascribeDocumentDatasourceMap]  WITH CHECK ADD FOREIGN KEY([DatasourceSEQ])
REFERENCES [dbo].[VeritascribeDatasources] ([DatasourceSEQ])
GO

ALTER TABLE [dbo].[VeritascribeDocumentDatasourceMap]  WITH CHECK ADD FOREIGN KEY([DocumentSEQ])
REFERENCES [dbo].[VeritascribeDocuments] ([DocumentSEQ])
GO

ALTER TABLE [dbo].[VeritascribeDocumentDatasourceMap]  WITH CHECK ADD FOREIGN KEY([DocumentSEQ])
REFERENCES [dbo].[VeritascribeDocuments] ([DocumentSEQ])
GO


/****** Object:  Table [dbo].[VeritascribeDatasources]    Script Date: 13-03-2026 16:42:32 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[VeritascribeDatasources](
	[DatasourceSEQ] [uniqueidentifier] NOT NULL,
	[UserSEQ] [uniqueidentifier] NOT NULL,
	[FileName] [nvarchar](255) NULL,
	[BlobPath] [nvarchar](500) NULL,
	[UploadedDate] [datetime2](7) NULL,
PRIMARY KEY CLUSTERED 
(
	[DatasourceSEQ] ASC
)WITH (STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[VeritascribeDatasources] ADD  DEFAULT (newid()) FOR [DatasourceSEQ]
GO

ALTER TABLE [dbo].[VeritascribeDatasources] ADD  DEFAULT (getutcdate()) FOR [UploadedDate]
GO

ALTER TABLE [dbo].[VeritascribeDatasources]  WITH CHECK ADD FOREIGN KEY([UserSEQ])
REFERENCES [dbo].[VeritascribeUsers] ([UserSEQ])
GO


model.py
from sqlalchemy import NVARCHAR, Column, String, Boolean, DateTime, Integer
from sqlalchemy.dialects.mssql import UNIQUEIDENTIFIER
from datetime import datetime
import uuid
from .database import Base

class VeritascribeUsers(Base):
    __tablename__ = "VeritascribeUsers"
    
    UserSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    UserID = Column(String, nullable=False)
    FirstName = Column(String(50), nullable=True)
    LastName = Column(String(50), nullable=True)
    Email = Column(String(100), nullable=True, unique=True)
    Mobile = Column(String(30), nullable=True)
    IsActive = Column(Boolean, default=True, nullable=True)
    Department = Column(String(100), nullable=True)
    Designation = Column(String(100), nullable=True)
    CreatedBy = Column(String(50), nullable=True)
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=True)
    UpdatedBy = Column(String(50), nullable=True)
    UpdatedDate = Column(DateTime, nullable=True)
    CountryId = Column(Integer, nullable=True)
    StateId = Column(Integer, nullable=True)
    CityId = Column(Integer, nullable=True)
    Zipcode = Column(String(20), nullable=True)
    OrganizationName = Column(String(100), nullable=True)
    JobType = Column(Integer, nullable=True)
    status = Column(String(50), nullable=True)
    UserIdentificationNumber = Column(String(20), nullable=True)
    UserAddress = Column(String(200), nullable=True)
    MobileCountryCode = Column(Integer, nullable=True)
    FirstLogin = Column(Boolean, default=True, nullable=False)
    GSTIN = Column(String(50), nullable=True)
    DailyLoginDate = Column(DateTime, nullable=True)


class VeritascribeUserPasswords(Base):
    __tablename__ = "VeritascribeUserPasswords"
    
    PasswordSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    UserSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    PasswordHash = Column(String(256), nullable=False)
    IsActive = Column(Boolean, default=True, nullable=False)
    CreatedBy = Column(String(50), nullable=True)
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=False)
    UpdatedBy = Column(String(50), nullable=True)
    UpdatedDate = Column(DateTime, nullable=True)
    ExpiryDate = Column(DateTime, nullable=True)
    LastPasswordChangeDate = Column(DateTime, nullable=True)
    emailotp = Column(String(20), nullable=True)


class VeritascribeRefreshTokens(Base):
    """Refresh tokens table for JWT authentication"""
    __tablename__ = "VeritascribeRefreshTokens"
    
    TokenSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    UserSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    RefreshToken = Column(String(512), nullable=False, unique=True, index=True)
    IsActive = Column(Boolean, default=True, nullable=False)
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=False)
    ExpiresAt = Column(DateTime, nullable=False)
    RevokedAt = Column(DateTime, nullable=True)
    LastUsedAt = Column(DateTime, nullable=True)


class VeritascribeTemplates(Base):
    """Templates table"""
    __tablename__ = "VeritascribeTemplates"
    
    TemplateSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    TemplateName = Column(String(255), nullable=False)
    BlobPath = Column(String(500), nullable=False)
    IsActive = Column(Boolean, default=True, nullable=False)
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=False)


class VeritascribeDatasources(Base):
    """Data sources table"""
    __tablename__ = "VeritascribeDatasources"
    
    DatasourceSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    UserSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    FileName = Column(String(255), nullable=False)
    BlobPath = Column(String(500), nullable=False)
    UploadedDate = Column(DateTime, default=datetime.utcnow, nullable=False)


class VeritascribeDocumentDatasourceMap(Base):
    """Map table for documents and data sources"""
    __tablename__ = "VeritascribeDocumentDatasourceMap"
    
    MapSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    DocumentSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    DatasourceSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    TrackChangeJsonPath = Column(String(500), nullable=True)
    TrackChangeUpdatedDate = Column(DateTime, nullable=True)


class VeritascribeDocuments(Base):
    """Documents table"""
    __tablename__ = "VeritascribeDocuments"
    
    DocumentSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    UserSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    FileName = Column(String(255), nullable=False)
    Status = Column(String(50), default='InProgress', nullable=False)  # InProgress, Completed
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=False)
    UpdatedDate = Column(DateTime, default=datetime.utcnow, nullable=True)
    IsActive = Column(Boolean, default=True, nullable=False)
    TemplateSEQ = Column(UNIQUEIDENTIFIER, nullable=True)
    WorkingBlobPath = Column(String(500), nullable=True)
    LastOpenedDate = Column(DateTime, nullable=True)


class VeritascribeEditSessions(Base):
    __tablename__ = "VeritascribeEditSessions"

    SessionSEQ = Column(UNIQUEIDENTIFIER, primary_key=True, default=uuid.uuid4)
    DocumentSEQ = Column(UNIQUEIDENTIFIER, nullable=False)
    UserSEQ = Column(UNIQUEIDENTIFIER, nullable=False)

    StateJson = Column(NVARCHAR(None), nullable=True)   # NVARCHAR(MAX)

    LastCheckpointDate = Column(DateTime, nullable=True)
    Status = Column(String(50), default="active", nullable=False)
    LastActiveDate = Column(DateTime, default=datetime.utcnow, nullable=False)
    CreatedDate = Column(DateTime, default=datetime.utcnow, nullable=False)

instead of uploading the datasource by the user, i want to populate the data source instantly there when the user selects the template, so based on the template the data source should populate

so i've a folder inside the Blob with the Name DataSources, so when the user selects the templates, the datasource should automatically populate which fetchs from DB path to the Blob and to UI


so how can i create a table or alter a table for making this happend

            ?>
        </tbody>
    </table><br>
    <a href="create.php" class="btn btn-success">Add New Student</a>
    <a href="classes.php" class="btn btn-primary">Manage Classes</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

