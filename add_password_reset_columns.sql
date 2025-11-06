-- Add password reset columns to users table
-- Run this SQL to update your database schema

ALTER TABLE `users`
ADD COLUMN `reset_token` VARCHAR(255) NULL DEFAULT NULL AFTER `token`,
ADD COLUMN `reset_token_expiry` DATETIME NULL DEFAULT NULL AFTER `reset_token`;

-- Optional: Add index for faster token lookups
ALTER TABLE `users` ADD INDEX `idx_reset_token` (`reset_token`);