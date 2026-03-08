## Employee Management System

A streamlined human resources administration tool built with Laravel 12. This application manages the complete lifecycle of staff members, from onboarding to status management.

---

## Technical Stack

| Category         | Technology            | Purpose                                      |
| ---------------- | --------------------- | -------------------------------------------- |
| **Framework** | Laravel 12            | Backend logic and routing                    |
| **Database** | MySQL    | Relational data storage                      |
| **ORM** | Eloquent              | Database abstraction and relationships       |
| **Frontend** | Blade & Tailwind CSS  | Server-side rendering and responsive styling |
| **Data Seeding** | PHP Faker             | Automated generation of test data            |
| **Pagination** | Laravel Paginator     | High-performance dataset navigation          |

---

## Features & Functionality

| Feature             | Status      | Technical Implementation                                |
| ------------------- | ----------- | ------------------------------------------------------ |
| **Search & Filter** | Operational | Query parameters with `when()` constraints             |
| **Onboarding** | Operational | Form validation and Eloquent `create()`                |
| **Status Toggle** | Operational | Partial updates via `PATCH` to switch Active/Inactive  |
| **Employee Delete** | Operational | Secure record removal using Eloquent `delete()`        |
| **Factory Seeding** | Operational | Rapid population of database for local development     |
| **Pagination** | Operational | `withQueryString()` to maintain filters during nav     |

---

## Installation

1. **Clone the repository**
   ```bash
   git clone [https://github.com/yourusername/larastaff.git](https://github.com/yourusername/larastaff.git)
