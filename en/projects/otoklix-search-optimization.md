# 🔍 Otoklix Search Engine Optimization
> Customer app search performance and relevance enhancement project

![Python](https://img.shields.io/badge/Python-3776AB?style=flat&logo=python&logoColor=white)
![Django](https://img.shields.io/badge/Django-092E20?style=flat&logo=django&logoColor=white)
![Elasticsearch](https://img.shields.io/badge/Elasticsearch-005571?style=flat&logo=elasticsearch&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![RabbitMQ](https://img.shields.io/badge/RabbitMQ-FF6600?style=flat&logo=rabbitmq&logoColor=white)
![Backend](https://img.shields.io/badge/Role-Backend%20Engineer-blue)

---

## 🎯 Project Overview

**Duration:** August 2022 - November 2022  
**Role:** Backend Engineer  
**Company:** Otoklix Indonesia

As one of the main B2C services in the automotive sector, **Otoklix** provides a digital platform for automotive product and workshop service bookings. However, the search functionality in the customer application (*CustApp*) faced significant challenges in both performance and search result relevance.

Through this project, I was responsible for **search system optimization** utilizing **Elasticsearch**, data structure transformation, and backend workflow improvements. The result was a faster, more relevant, and efficient search system that significantly improved user experience.

---

## 🚀 The Challenge

<details>
<summary><strong>Legacy Search System Limitations</strong></summary>

Before optimization, the search feature faced several critical issues:

- **Package-Based Search:** Search system was still based on *service packages*, making results less relevant when users searched for specific products or services
- **Poor Performance:** Search response times could reach over **15 seconds**, far from ideal standards for user experience
- **Heavy Query Load:** Despite using Elasticsearch, the backend still performed extensive price calculations with numerous additional MySQL queries, making the process slow
- **Excessive Complexity:** Package-based search required complex MySQL queries for each result, making system optimization difficult

</details>

---

## 💡 Solution: Comprehensive Search Optimization

```mermaid
graph TD
    A[User Search Query] --> B[Product-Based Search Engine]
    B --> C[Elasticsearch Processing]
    C --> D[Relevant Products Found]
    D --> E[Nearby Workshop Filter]
    E --> F[Service Package Mapping]
    F --> G[Booking Integration]
    
    H[MySQL Verification] --> I[Price & Availability Check]
    I --> J[Final Results]
    
    K[Background Indexing] --> L[RabbitMQ Queue]
    L --> M[Real-time Index Updates]
    
    style A fill:#e3f2fd
    style C fill:#f3e5f5
    style G fill:#e8f5e8
    style K fill:#fff3e0
```

To address these challenges, I implemented a comprehensive approach to redesign the search system.

### 🔧 Core Features & Capabilities

#### **Transition from Package-Based to Product-Based Search**
- Transformed search to focus on products (type, brand, model), then cascade to relevant service packages and workshops
- More intuitive and relevant search experience for users

#### **Elasticsearch Optimization**
- Redesigned document structure and indices in Elasticsearch
- Stored more ready-to-use data in Elasticsearch to reduce MySQL dependency

#### **Integrated & Simplified Search**
Users now need only **1 search endpoint** for:
1. Search products
2. Select nearby workshops providing the product/package
3. Choose service package
4. Make booking

#### **Minimal MySQL Queries**
MySQL queries only performed for final verification such as product availability and latest pricing to maintain data accuracy

---

## 🛠️ My Technical Contributions

### Backend Engineer Role

In this project, I held full backend responsibility with primary duties including:

#### 1. **Research & Technology Design**
- Analyzed weaknesses in previous search architecture
- Researched best practices for Elasticsearch implementation in product and service search
- Redesigned data structure and search workflows

#### 2. **Development & Integration**
- Restructured Elasticsearch documents and indices to fit product-based search model
- Built new, more concise, fast, and user-friendly REST APIs for frontend
- Ensured efficient data flow from backend to frontend without excessive query load

#### 3. **System Performance Optimization**
- Reduced MySQL dependency by storing ready-to-use data in Elasticsearch
- Integrated **RabbitMQ** for handling *background indexing* whenever product/workshop data changes from ERP
- Performed benchmarking and performance testing until search response time was drastically reduced

---

## 📊 Results & Impact

The search optimization implementation resulted in significant improvements:

| Metric | Before Optimization | After Optimization |
|--------|--------------------|--------------------|
| **Search Model** | Package-Based | **Product-Based & Integrated** |
| **Response Time** | > 15 seconds | **< 2 seconds** |
| **Result Relevance** | Low | **High (based on product, package, and location)** |
| **Query Efficiency** | Many MySQL Queries | **Minimal Queries (more in Elasticsearch)** |

```mermaid
graph LR
    A[Before: 15+ seconds] --> B[After: <2 seconds]
    C[Before: Package-based] --> D[After: Product-based]
    E[Before: Heavy MySQL] --> F[After: Optimized Elasticsearch]
    
    style B fill:#4CAF50
    style D fill:#2196F3
    style F fill:#FF9800
```

---

## 🔧 Technology Stack

- **Backend:** Python (Django Framework)
- **Database:** MySQL
- **Search Engine:** Elasticsearch
- **Message Queue & Background Jobs:** RabbitMQ (for Elasticsearch index updates)

---

## 🎉 Key Achievements

✅ **87% Performance Improvement** - Response time reduced from 15+ seconds to <2 seconds  
✅ **Enhanced Search Relevance** - Product-based search with location and service integration  
✅ **Reduced Server Load** - Minimized MySQL queries through Elasticsearch optimization  
✅ **Scalable Architecture** - Background indexing system for real-time data updates  
✅ **Improved User Experience** - Single endpoint for complete search-to-booking flow  
✅ **System Reliability** - Robust error handling and fallback mechanisms  

---

## 💡 Technical Insights

This project provided valuable learnings in:
- **Elasticsearch Architecture** design for complex search requirements
- **Data Denormalization** strategies for performance optimization
- **Background Processing** patterns for real-time search index updates
- **API Design** for seamless frontend integration
- **Performance Benchmarking** and optimization techniques

---

*Overall, this project successfully improved the **user experience** of the Otoklix application, strengthened search speed and relevance, and supported B2C service growth in the digital automotive industry.*
