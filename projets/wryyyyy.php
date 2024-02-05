<?php

// Account data
$accounts = array(
  array('c001', 'Keger', 'Alice', 4000),
  array('c004', 'Ruel', 'Martine', 2500),
  array('c005', 'Erone', 'Quentin', 1500),
  array('c006', 'Erone', 'Anne', 2000),
);

// Movement data
$movements = array(
  array('c001', 'CB', -80),
  array('c001', 'CHQ', -200),
  array('c001', 'CB', -20),
  array('c001', 'VIR', 2500),
  array('c004', 'CB', -80),
  array('c004', 'CB', -20),
  array('c006', 'VIR', 1000),
  array('c006', 'CB', -500),
);

// Function to input account data
function inputAccountData() {
  global $accounts;

  // Get data from user and add to $accounts array
  // (code to get data from user goes here)
  $accounts[] = array('c007', 'Doe', 'John', 3000);
}

// Function to input movement data
function inputMovementData() {
  global $movements;

  // Get data from user and add to $movements array
  // (code to get data from user goes here)
  $movements[] = array('c007', 'CB', -100);
}

// Function to perform movements on accounts
function performMovements() {
  global $accounts, $movements;

  // Loop through movements and update account balances
  foreach ($movements as $movement) {
    $accountNumber = $movement[0];
    $amount = $movement[2];

    // Find account and update balance
    foreach ($accounts as &$account) {
      if ($account[0] == $accountNumber) {
        $account[3] += $amount;
        break;
      }
    }
  }
}

// Function to display accounts
function displayAccounts() {
  global $accounts;

  // Print header
  echo "N° - Nom - Prénom - Solde\n";

  // Print account data
  foreach ($accounts as $account) {
    echo implode(' - ', $account) . "\n";
  }
}

// Main program
inputAccountData();
inputMovementData();
performMovements();
displayAccounts();

?>
