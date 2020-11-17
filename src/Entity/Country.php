<?php


    namespace App\Entity;


    class Country
    {
        private string $country;
        private int $cases;
        private int $todayCases;
        private int $deaths;
        private int $todayDeaths;
        private int $recovered;
        private int $active;
        private int $critical;
        private int $casesPerOneMillion;
        private int $deathsPerOneMillion;
        private int $totalTests;
        private int $testsPerOneMillion;

        /**
         * @return string
         */
        public function getCountry(): string
        {
            return $this->country;
        }

        /**
         * @param string $country
         */
        public function setCountry(string $country): void
        {
            $this->country= $country;
        }

        /**
         * @return int
         */
        public function getCases(): int
        {
            return $this->cases;
        }

        /**
         * @param int $cases
         */
        public function setCases(int $cases): void
        {
            $this->cases = $cases;
        }

        /**
         * @return int
         */
        public function getTodayCases(): int
        {
            return $this->todayCases;
        }

        /**
         * @param int $todayCases
         */
        public function setTodayCases(int $todayCases): void
        {
            $this->todayCases = $todayCases;
        }

        /**
         * @return int
         */
        public function getDeaths(): int
        {
            return $this->deaths;
        }

        /**
         * @param int $deaths
         */
        public function setDeaths(int $deaths): void
        {
            $this->deaths = $deaths;
        }

        /**
         * @return int
         */
        public function getTodayDeaths(): int
        {
            return $this->todayDeaths;
        }

        /**
         * @param int $todayDeaths
         */
        public function setTodayDeaths(int $todayDeaths): void
        {
            $this->todayDeaths = $todayDeaths;
        }

        /**
         * @return int
         */
        public function getRecovered(): int
        {
            return $this->recovered;
        }

        /**
         * @param int $recovered
         */
        public function setRecovered(int $recovered): void
        {
            $this->recovered = $recovered;
        }

        /**
         * @return int
         */
        public function getActive(): int
        {
            return $this->active;
        }

        /**
         * @param int $active
         */
        public function setActive(int $active): void
        {
            $this->active = $active;
        }

        /**
         * @return int
         */
        public function getCritical(): int
        {
            return $this->critical;
        }

        /**
         * @param int $critical
         */
        public function setCritical(int $critical): void
        {
            $this->critical = $critical;
        }

        /**
         * @return int
         */
        public function getCasesPerOneMillion(): int
        {
            return $this->casesPerOneMillion;
        }

        /**
         * @param int $casesPerOneMillion
         */
        public function setCasesPerOneMillion(int $casesPerOneMillion): void
        {
            $this->casesPerOneMillion = $casesPerOneMillion;
        }

        /**
         * @return int
         */
        public function getDeathsPerOneMillion(): int
        {
            return $this->deathsPerOneMillion;
        }

        /**
         * @param int $deathsPerOneMillion
         */
        public function setDeathsPerOneMillion(int $deathsPerOneMillion): void
        {
            $this->deathsPerOneMillion = $deathsPerOneMillion;
        }

        /**
         * @return int
         */
        public function getTotalTests(): int
        {
            return $this->totalTests;
        }

        /**
         * @param int $totalTests
         */
        public function setTotalTests(int $totalTests): void
        {
            $this->totalTests = $totalTests;
        }

        /**
         * @return int
         */
        public function getTestsPerOneMillion(): int
        {
            return $this->testsPerOneMillion;
        }

        /**
         * @param int $testsPerOneMillion
         */
        public function setTestsPerOneMillion(int $testsPerOneMillion): void
        {
            $this->testsPerOneMillion = $testsPerOneMillion;
        }



    }