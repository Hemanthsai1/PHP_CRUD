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

