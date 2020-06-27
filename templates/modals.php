<!-- Modal layer (UFID_TRANSLATION) -->
<div class="modal fade" id="ufid_translation" tabindex="-1" role="dialog" aria-labelledby="ufid_translation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="ufid_translation">New translation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Form -->
            <form method="post" name="ufid_translation" id="ufid_translation" action="handler/new-translation.php" enctype="utf-8" autocomplete="off">
              <!-- Form identification -->
              <input type="hidden" name="form_name" id="form_name" value="ufid_translation">
            <div class="modal-body">
              <!-- Modal layer content -->
              <div class="body">
                      <div class="form-group">
                        <label>Message type</label>
                        <br />
                        <label class="fancy-radio">
                            <input type="radio" name="type" value="text" checked>
                            <span><i></i>Text</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="type" value="sign">
                            <span><i></i>Sign</span>
                        </label>
                      </div>
                      <div class="form-group">
                          <label>Unique key</label>
                          <input name="key" type="text" class="form-control" required>
                      </div>
                      <div class="form-group">
                          <label>English</label>
                          <textarea name="english" class="form-control" rows="5" cols="30" required></textarea>
                      </div>
                      <div class="form-group">
                          <label>Spanish</label>
                          <textarea name="spanish" class="form-control" rows="5" cols="30" required></textarea>
                      </div>
                      <div class="form-group">
                          <div class="row clearfix">
                              <div class="col-lg-6 col-md-12">
                                  <label>Translation prefix</label>
                                  <br />
                                  <label class="fancy-radio">
                                      <input type="radio" name="prefix" value="1">
                                      <span><i></i>Yes</span>
                                  </label>
                                  <label class="fancy-radio">
                                      <input type="radio" name="prefix" value="0" checked>
                                      <span><i></i>No</span>
                                  </label>
                                  <br/>
                                  <br/>
                                  <br/>
                                  <div class="btn-group mr-2">
                                  <button type="submit" class="btn btn-success">Add translation</button>
                                  <button type="reset" class="btn btn-warning">Clear form</button>
                                </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          <!-- End of form -->


        </div>
    </div>
<!-- End of modal layer -->






<!-- Modal layer (UFID_WRITETRANSLATION) -->
<div class="modal fade" id="ufid_writetranslation" tabindex="-1" role="dialog" aria-labelledby="ufid_writetranslation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="ufid_writetranslation">Write translations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Form -->
            <form method="post" name="ufid_writetranslation" id="ufid_writetranslation" action="handler/write-translation.php" enctype="utf-8" autocomplete="off">
              <!-- Form identification -->
              <input type="hidden" name="form_name" id="form_name" value="ufid_writetranslation">
            <div class="modal-body">
              <!-- Modal layer content -->
              <p>Are you sure you want to write these translations? This action can't be changed.</p>
              <button class="btn btn-success">Write file</button>

            </div>
        </div>
            </form>
          <!-- End of form -->


        </div>
    </div>
<!-- End of modal layer -->





<!-- Modal layer (UFID_WRITETRANSLATION) -->
<div class="modal fade" id="ufid_regentranslation" tabindex="-1" role="dialog" aria-labelledby="ufid_regentranslation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="ufid_regentranslation">Regenerate file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Form -->
            <form method="post" name="" id="" action="" enctype="utf-8" autocomplete="off">
              <!-- Form identification -->
              <input type="hidden" name="form_name" id="form_name" value="ufid_regentranslation">
            <div class="modal-body">
              <!-- Modal layer content -->
              <p>Are you sure you want to regenerate the translations file? This action can't be changed.</p>

            </div>
        </div>
            </form>
          <!-- End of form -->


        </div>
    </div>
<!-- End of modal layer -->





<!-- Modal layer (UFID_ACHIEVEMENTS) -->
<div class="modal fade" id="ufid_achievements" tabindex="-1" role="dialog" aria-labelledby="ufid_achievements" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="ufid_achievements">New achievement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Form -->
            <form method="post" name="ufid_achievements" id="ufid_achievements" action="handler/new-achievement.php" enctype="utf-8" autocomplete="off">
              <!-- Form identification -->
              <input type="hidden" name="form_name" id="form_name" value="ufid_achievements">
              <input type="hidden" name="action" id="action" value="new">
            <div class="modal-body">
              <!-- Modal layer content -->
              <div class="form-group">
                <div class="form-group">

                  <label>Achievement type</label>
                  <select name="type" class="form-control" required>
                    <option value="Breeding">Breeding</option>
                    <option value="Crafts">Crafts</option>
                    <option value="TargetsShot">Targets shot</option>
                    <option value="Kills">Kills</option>
                    <option value="Breaks">Blocks breaked</option>
                    <option value="Places">Blocks placed</option>
                    <option value="Riptides">Riptides</option>
                    <option value="RaidsWon">Raids won</option>
                    <option value="DistanceLlama">Travelled distance in Llamas</option>
                    <option value="DistanceGliding">Travelled distance Gliding</option>
                    <option value="DistanceBoat">Travelled distance in Boats</option>
                    <option value="DistanceMinecart">Travelled distance in Minecarts</option>
                    <option value="DistanceHorse">Travelled distance in Horses</option>
                    <option value="DistancePig">Travelled distance in Pigs</option>
                    <option value="DistanceFoot">Travelled distance on Foot</option>
                    <option value="Smelting">Items smelted</option>
                    <option value="EnderPearls">Enderpearls used</option>
                    <option value="MusicDiscs">Music discs listened</option>
                    <option value="Fireworks">Fireworks used</option>
                    <option value="Brewing">Brewing</option>
                    <option value="Taming">Taming</option>
                    <option value="Fertilising">Fertilising</option>
                    <option value="HoePlowings">How plowings</option>
                    <option value="ItemPickups">Items picked up</option>
                    <option value="ItemDrops">Items dropped</option>
                    <option value="PlayedTime">Played time</option>
                    <option value="ConsumedPotions">Consumed potions</option>
                    <option value="MaxLevel">Max level</option>
                    <option value="Beds">Beds used</option>
                    <option value="Enchantments">Enchantmens</option>
                    <option value="AnvilsUsed">Anvils used</option>
                    <option value="Trades">Villager trades</option>
                    <option value="WaterBuckets">Buckets of water used</option>
                    <option value="LavaBuckets">Buckets of lava used</option>
                    <option value="Milk">Milking cows</option>
                    <option value="Shear">Shears</option>
                    <option value="EatenItems">Eaten items</option>
                    <option value="ItemBreaks">Breaked items</option>
                    <option value="Treasures">Treasures found</option>
                    <option value="Fish">Fish</option>
                    <option value="Eggs">Eggs</option>
                    <option value="Snowballs">Swnoballs</option>
                    <option value="Arrows">Arrows</option>
                    <option value="Deaths">Deaths</option>
                    <option value="Connections">Connections</option>
                  </select>

                </div>

                <div class="form-group">
                  <label>Materials</label>
                  <select name="material_type" class="form-control">
                      <optgroup label="Options">
                    <option value="false">None</option>
                      </optgroup>
                        <optgroup label="A">
                          <option value="acacia_boat">Acacia_boat</option>
                          <option value="acacia_button">Acacia_button</option>
                          <option value="acacia_door">Acacia_door</option>
                          <option value="acacia_fence">Acacia_fence</option>
                          <option value="acacia_fence_gate">Acacia_fence_gate</option>
                          <option value="acacia_leaves">Acacia_leaves</option>
                          <option value="acacia_log">Acacia_log</option>
                          <option value="acacia_planks">Acacia_planks</option>
                          <option value="acacia_pressure_plate">Acacia_pressure_plate</option>
                          <option value="acacia_sapling">Acacia_sapling</option>
                          <option value="acacia_sign">Acacia_sign</option>
                          <option value="acacia_slab">Acacia_slab</option>
                          <option value="acacia_stairs">Acacia_stairs</option>
                          <option value="acacia_trapdoor">Acacia_trapdoor</option>
                          <option value="acacia_wall_sign">Acacia_wall_sign</option>
                          <option value="acacia_wood">Acacia_wood</option>
                          <option value="activator_rail">Activator_rail</option>
                          <option value="air">Air</option>
                          <option value="allium">Allium</option>
                          <option value="andesite">Andesite</option>
                          <option value="andesite_slab">Andesite_slab</option>
                          <option value="andesite_stairs">Andesite_stairs</option>
                          <option value="andesite_wall">Andesite_wall</option>
                          <option value="anvil">Anvil</option>
                          <option value="apple">Apple</option>
                          <option value="armor_stand">Armor_stand</option>
                          <option value="arrow">Arrow</option>
                          <option value="attached_melon_stem">Attached_melon_stem</option>
                          <option value="attached_pumpkin_stem">Attached_pumpkin_stem</option>
                          <option value="azure_bluet">Azure_bluet</option>
                        </optgroup>
                        <optgroup label="B">
                          <option value="baked_potato">Baked_potato</option>
                          <option value="bamboo">Bamboo</option>
                          <option value="bamboo_sapling">Bamboo_sapling</option>
                          <option value="barrel">Barrel</option>
                          <option value="barrier">Barrier</option>
                          <option value="bat_spawn_egg">Bat_spawn_egg</option>
                          <option value="beacon">Beacon</option>
                          <option value="bedrock">Bedrock</option>
                          <option value="beef">Beef</option>
                          <option value="beetroot">Beetroot</option>
                          <option value="beetroots">Beetroots</option>
                          <option value="beetroot_seeds">Beetroot_seeds</option>
                          <option value="beetroot_soup">Beetroot_soup</option>
                          <option value="bell">Bell</option>
                          <option value="birch_boat">Birch_boat</option>
                          <option value="birch_button">Birch_button</option>
                          <option value="birch_door">Birch_door</option>
                          <option value="birch_fence">Birch_fence</option>
                          <option value="birch_fence_gate">Birch_fence_gate</option>
                          <option value="birch_leaves">Birch_leaves</option>
                          <option value="birch_log">Birch_log</option>
                          <option value="birch_planks">Birch_planks</option>
                          <option value="birch_pressure_plate">Birch_pressure_plate</option>
                          <option value="birch_sapling">Birch_sapling</option>
                          <option value="birch_sign">Birch_sign</option>
                          <option value="birch_slab">Birch_slab</option>
                          <option value="birch_stairs">Birch_stairs</option>
                          <option value="birch_trapdoor">Birch_trapdoor</option>
                          <option value="birch_wall_sign">Birch_wall_sign</option>
                          <option value="birch_wood">Birch_wood</option>
                          <option value="black_banner">Black_banner</option>
                          <option value="black_bed">Black_bed</option>
                          <option value="black_carpet">Black_carpet</option>
                          <option value="black_concrete">Black_concrete</option>
                          <option value="black_concrete_powder">Black_concrete_powder</option>
                          <option value="black_dye">Black_dye</option>
                          <option value="black_glazed_terracotta">Black_glazed_terracotta</option>
                          <option value="black_shulker_box">Black_shulker_box</option>
                          <option value="black_stained_glass">Black_stained_glass</option>
                          <option value="black_stained_glass_pane">Black_stained_glass_pane</option>
                          <option value="black_terracotta">Black_terracotta</option>
                          <option value="black_wall_banner">Black_wall_banner</option>
                          <option value="black_wool">Black_wool</option>
                          <option value="blast_furnace">Blast_furnace</option>
                          <option value="blaze_powder">Blaze_powder</option>
                          <option value="blaze_rod">Blaze_rod</option>
                          <option value="blaze_spawn_egg">Blaze_spawn_egg</option>
                          <option value="blue_banner">Blue_banner</option>
                          <option value="blue_bed">Blue_bed</option>
                          <option value="blue_carpet">Blue_carpet</option>
                          <option value="blue_concrete">Blue_concrete</option>
                          <option value="blue_concrete_powder">Blue_concrete_powder</option>
                          <option value="blue_dye">Blue_dye</option>
                          <option value="blue_glazed_terracotta">Blue_glazed_terracotta</option>
                          <option value="blue_ice">Blue_ice</option>
                          <option value="blue_orchid">Blue_orchid</option>
                          <option value="blue_shulker_box">Blue_shulker_box</option>
                          <option value="blue_stained_glass">Blue_stained_glass</option>
                          <option value="blue_stained_glass_pane">Blue_stained_glass_pane</option>
                          <option value="blue_terracotta">Blue_terracotta</option>
                          <option value="blue_wall_banner">Blue_wall_banner</option>
                          <option value="blue_wool">Blue_wool</option>
                          <option value="bone">Bone</option>
                          <option value="bone_block">Bone_block</option>
                          <option value="bone_meal">Bone_meal</option>
                          <option value="book">Book</option>
                          <option value="bookshelf">Bookshelf</option>
                          <option value="bow">Bow</option>
                          <option value="bowl">Bowl</option>
                          <option value="brain_coral">Brain_coral</option>
                          <option value="brain_coral_block">Brain_coral_block</option>
                          <option value="brain_coral_fan">Brain_coral_fan</option>
                          <option value="brain_coral_wall_fan">Brain_coral_wall_fan</option>
                          <option value="bread">Bread</option>
                          <option value="brewing_stand">Brewing_stand</option>
                          <option value="brick">Brick</option>
                          <option value="bricks">Bricks</option>
                          <option value="brick_slab">Brick_slab</option>
                          <option value="brick_stairs">Brick_stairs</option>
                          <option value="brick_wall">Brick_wall</option>
                          <option value="brown_banner">Brown_banner</option>
                          <option value="brown_bed">Brown_bed</option>
                          <option value="brown_carpet">Brown_carpet</option>
                          <option value="brown_concrete">Brown_concrete</option>
                          <option value="brown_concrete_powder">Brown_concrete_powder</option>
                          <option value="brown_dye">Brown_dye</option>
                          <option value="brown_glazed_terracotta">Brown_glazed_terracotta</option>
                          <option value="brown_mushroom">Brown_mushroom</option>
                          <option value="brown_mushroom_block">Brown_mushroom_block</option>
                          <option value="brown_shulker_box">Brown_shulker_box</option>
                          <option value="brown_stained_glass">Brown_stained_glass</option>
                          <option value="brown_stained_glass_pane">Brown_stained_glass_pane</option>
                          <option value="brown_terracotta">Brown_terracotta</option>
                          <option value="brown_wall_banner">Brown_wall_banner</option>
                          <option value="brown_wool">Brown_wool</option>
                          <option value="bubble_column">Bubble_column</option>
                          <option value="bubble_coral">Bubble_coral</option>
                          <option value="bubble_coral_block">Bubble_coral_block</option>
                          <option value="bubble_coral_fan">Bubble_coral_fan</option>
                          <option value="bubble_coral_wall_fan">Bubble_coral_wall_fan</option>
                          <option value="bucket">Bucket</option>
                        </optgroup>
                        <optgroup label="C">
                          <option value="cactus">Cactus</option>
                          <option value="cake">Eake</option>
                          <option value="campfire">Eampfire</option>
                          <option value="carrot">Earrot</option>
                          <option value="carrots">Earrots</option>
                          <option value="carrot_on_a_stick">Earrot_on_a_stick</option>
                          <option value="cartography_table">Eartography_table</option>
                          <option value="carved_pumpkin">Earved_pumpkin</option>
                          <option value="cat_spawn_egg">Eat_spawn_egg</option>
                          <option value="cauldron">Eauldron</option>
                          <option value="cave_air">Eave_air</option>
                          <option value="cave_spider_spawn_egg">Eave_spider_spawn_egg</option>
                          <option value="chainmail_boots">Ehainmail_boots</option>
                          <option value="chainmail_chestplate">Ehainmail_chestplate</option>
                          <option value="chainmail_helmet">Ehainmail_helmet</option>
                          <option value="chainmail_leggings">Ehainmail_leggings</option>
                          <option value="chain_command_block">Ehain_command_block</option>
                          <option value="charcoal">Eharcoal</option>
                          <option value="chest">Ehest</option>
                          <option value="chest_minecart">Ehest_minecart</option>
                          <option value="chicken">Ehicken</option>
                          <option value="chicken_spawn_egg">Ehicken_spawn_egg</option>
                          <option value="chipped_anvil">Ehipped_anvil</option>
                          <option value="chiseled_quartz_block">Ehiseled_quartz_block</option>
                          <option value="chiseled_red_sandstone">Ehiseled_red_sandstone</option>
                          <option value="chiseled_sandstone">Ehiseled_sandstone</option>
                          <option value="chiseled_stone_bricks">Ehiseled_stone_bricks</option>
                          <option value="chorus_flower">Ehorus_flower</option>
                          <option value="chorus_fruit">Ehorus_fruit</option>
                          <option value="chorus_plant">Ehorus_plant</option>
                          <option value="clay">Elay</option>
                          <option value="clay_ball">Elay_ball</option>
                          <option value="clock">Elock</option>
                          <option value="coal">Eoal</option>
                          <option value="coal_block">Eoal_block</option>
                          <option value="coal_ore">Eoal_ore</option>
                          <option value="coarse_dirt">Eoarse_dirt</option>
                          <option value="cobblestone">Eobblestone</option>
                          <option value="cobblestone_slab">Eobblestone_slab</option>
                          <option value="cobblestone_stairs">Eobblestone_stairs</option>
                          <option value="cobblestone_wall">Eobblestone_wall</option>
                          <option value="cobweb">Eobweb</option>
                          <option value="cocoa">Eocoa</option>
                          <option value="cocoa_beans">Eocoa_beans</option>
                          <option value="cod">Eod</option>
                          <option value="cod_bucket">Eod_bucket</option>
                          <option value="cod_spawn_egg">Eod_spawn_egg</option>
                          <option value="command_block">Eommand_block</option>
                          <option value="command_block_minecart">Eommand_block_minecart</option>
                          <option value="comparator">Eomparator</option>
                          <option value="compass">Eompass</option>
                          <option value="composter">Eomposter</option>
                          <option value="conduit">Eonduit</option>
                          <option value="cooked_beef">Eooked_beef</option>
                          <option value="cooked_chicken">Eooked_chicken</option>
                          <option value="cooked_cod">Eooked_cod</option>
                          <option value="cooked_mutton">Eooked_mutton</option>
                          <option value="cooked_porkchop">Eooked_porkchop</option>
                          <option value="cooked_rabbit">Eooked_rabbit</option>
                          <option value="cooked_salmon">Eooked_salmon</option>
                          <option value="cookie">Eookie</option>
                          <option value="cornflower">Eornflower</option>
                          <option value="cow_spawn_egg">Eow_spawn_egg</option>
                          <option value="cracked_stone_bricks">Eracked_stone_bricks</option>
                          <option value="crafting_table">Erafting_table</option>
                          <option value="creeper_banner_pattern">Ereeper_banner_pattern</option>
                          <option value="creeper_head">Ereeper_head</option>
                          <option value="creeper_spawn_egg">Ereeper_spawn_egg</option>
                          <option value="creeper_wall_head">Ereeper_wall_head</option>
                          <option value="crossbow">Erossbow</option>
                          <option value="cut_red_sandstone">Eut_red_sandstone</option>
                          <option value="cut_red_sandstone_slab">Eut_red_sandstone_slab</option>
                          <option value="cut_sandstone">Eut_sandstone</option>
                          <option value="cut_sandstone_slab">Eut_sandstone_slab</option>
                          <option value="cyan_banner">Eyan_banner</option>
                          <option value="cyan_bed">Eyan_bed</option>
                          <option value="cyan_carpet">Eyan_carpet</option>
                          <option value="cyan_concrete">Eyan_concrete</option>
                          <option value="cyan_concrete_powder">Eyan_concrete_powder</option>
                          <option value="cyan_dye">Eyan_dye</option>
                          <option value="cyan_glazed_terracotta">Eyan_glazed_terracotta</option>
                          <option value="cyan_shulker_box">Eyan_shulker_box</option>
                          <option value="cyan_stained_glass">Eyan_stained_glass</option>
                          <option value="cyan_stained_glass_pane">Eyan_stained_glass_pane</option>
                          <option value="cyan_terracotta">Eyan_terracotta</option>
                          <option value="cyan_wall_banner">Eyan_wall_banner</option>
                          <option value="cyan_wool">Eyan_wool</option>
                        </optgroup>
                        <optgroup label="D">
                          <option value="damaged_anvil">Damaged_anvil</option>
                          <option value="dandelion">Dandelion</option>
                          <option value="dark_oak_boat">Dark_oak_boat</option>
                          <option value="dark_oak_button">Dark_oak_button</option>
                          <option value="dark_oak_door">Dark_oak_door</option>
                          <option value="dark_oak_fence">Dark_oak_fence</option>
                          <option value="dark_oak_fence_gate">Dark_oak_fence_gate</option>
                          <option value="dark_oak_leaves">Dark_oak_leaves</option>
                          <option value="dark_oak_log">Dark_oak_log</option>
                          <option value="dark_oak_planks">Dark_oak_planks</option>
                          <option value="dark_oak_pressure_plate">Dark_oak_pressure_plate</option>
                          <option value="dark_oak_sapling">Dark_oak_sapling</option>
                          <option value="dark_oak_sign">Dark_oak_sign</option>
                          <option value="dark_oak_slab">Dark_oak_slab</option>
                          <option value="dark_oak_stairs">Dark_oak_stairs</option>
                          <option value="dark_oak_trapdoor">Dark_oak_trapdoor</option>
                          <option value="dark_oak_wall_sign">Dark_oak_wall_sign</option>
                          <option value="dark_oak_wood">Dark_oak_wood</option>
                          <option value="dark_prismarine">Dark_prismarine</option>
                          <option value="dark_prismarine_slab">Dark_prismarine_slab</option>
                          <option value="dark_prismarine_stairs">Dark_prismarine_stairs</option>
                          <option value="daylight_detector">Daylight_detector</option>
                          <option value="dead_brain_coral">Dead_brain_coral</option>
                          <option value="dead_brain_coral_block">Dead_brain_coral_block</option>
                          <option value="dead_brain_coral_fan">Dead_brain_coral_fan</option>
                          <option value="dead_brain_coral_wall_fan">Dead_brain_coral_wall_fan</option>
                          <option value="dead_bubble_coral">Dead_bubble_coral</option>
                          <option value="dead_bubble_coral_block">Dead_bubble_coral_block</option>
                          <option value="dead_bubble_coral_fan">Dead_bubble_coral_fan</option>
                          <option value="dead_bubble_coral_wall_fan">Dead_bubble_coral_wall_fan</option>
                          <option value="dead_bush">Dead_bush</option>
                          <option value="dead_fire_coral">Dead_fire_coral</option>
                          <option value="dead_fire_coral_block">Dead_fire_coral_block</option>
                          <option value="dead_fire_coral_fan">Dead_fire_coral_fan</option>
                          <option value="dead_fire_coral_wall_fan">Dead_fire_coral_wall_fan</option>
                          <option value="dead_horn_coral">Dead_horn_coral</option>
                          <option value="dead_horn_coral_block">Dead_horn_coral_block</option>
                          <option value="dead_horn_coral_fan">Dead_horn_coral_fan</option>
                          <option value="dead_horn_coral_wall_fan">Dead_horn_coral_wall_fan</option>
                          <option value="dead_tube_coral">Dead_tube_coral</option>
                          <option value="dead_tube_coral_block">Dead_tube_coral_block</option>
                          <option value="dead_tube_coral_fan">Dead_tube_coral_fan</option>
                          <option value="dead_tube_coral_wall_fan">Dead_tube_coral_wall_fan</option>
                          <option value="debug_stick">Debug_stick</option>
                          <option value="detector_rail">Detector_rail</option>
                          <option value="diamond">Diamond</option>
                          <option value="diamond_axe">Diamond_axe</option>
                          <option value="diamond_block">Diamond_block</option>
                          <option value="diamond_boots">Diamond_boots</option>
                          <option value="diamond_chestplate">Diamond_chestplate</option>
                          <option value="diamond_helmet">Diamond_helmet</option>
                          <option value="diamond_hoe">Diamond_hoe</option>
                          <option value="diamond_horse_armor">Diamond_horse_armor</option>
                          <option value="diamond_leggings">Diamond_leggings</option>
                          <option value="diamond_ore">Diamond_ore</option>
                          <option value="diamond_pickaxe">Diamond_pickaxe</option>
                          <option value="diamond_shovel">Diamond_shovel</option>
                          <option value="diamond_sword">Diamond_sword</option>
                          <option value="diorite">Diorite</option>
                          <option value="diorite_slab">Diorite_slab</option>
                          <option value="diorite_stairs">Diorite_stairs</option>
                          <option value="diorite_wall">Diorite_wall</option>
                          <option value="dirt">Dirt</option>
                          <option value="dispenser">Dispenser</option>
                          <option value="dolphin_spawn_egg">Dolphin_spawn_egg</option>
                          <option value="donkey_spawn_egg">Donkey_spawn_egg</option>
                          <option value="dragon_breath">Dragon_breath</option>
                          <option value="dragon_egg">Dragon_egg</option>
                          <option value="dragon_head">Dragon_head</option>
                          <option value="dragon_wall_head">Dragon_wall_head</option>
                          <option value="dried_kelp">Dried_kelp</option>
                          <option value="dried_kelp_block">Dried_kelp_block</option>
                          <option value="dropper">Dropper</option>
                          <option value="drowned_spawn_egg">Drowned_spawn_egg</option>
                        </optgroup>
                        <optgroup label="E">
                          <option value="egg">Egg</option>
                          <option value="elder_guardian_spawn_egg">Elder_guardian_spawn_egg</option>
                          <option value="elytra">Elytra</option>
                          <option value="emerald">Emerald</option>
                          <option value="emerald_block">Emerald_block</option>
                          <option value="emerald_ore">Emerald_ore</option>
                          <option value="enchanted_book">Enchanted_book</option>
                          <option value="enchanted_golden_apple">Enchanted_golden_apple</option>
                          <option value="enchanting_table">Enchanting_table</option>
                          <option value="enderman_spawn_egg">Enderman_spawn_egg</option>
                          <option value="endermite_spawn_egg">Endermite_spawn_egg</option>
                          <option value="ender_chest">Ender_chest</option>
                          <option value="ender_eye">Ender_eye</option>
                          <option value="ender_pearl">Ender_pearl</option>
                          <option value="end_crystal">End_crystal</option>
                          <option value="end_gateway">End_gateway</option>
                          <option value="end_portal">End_portal</option>
                          <option value="end_portal_frame">End_portal_frame</option>
                          <option value="end_rod">End_rod</option>
                          <option value="end_stone">End_stone</option>
                          <option value="end_stone_bricks">End_stone_bricks</option>
                          <option value="end_stone_brick_slab">End_stone_brick_slab</option>
                          <option value="end_stone_brick_stairs">End_stone_brick_stairs</option>
                          <option value="end_stone_brick_wall">End_stone_brick_wall</option>
                          <option value="evoker_spawn_egg">Evoker_spawn_egg</option>
                          <option value="experience_bottle">Experience_bottle</option>
                        </optgroup>
                        <optgroup label="F">
                          <option value="farmland">Farmland</option>
                          <option value="feather">Feather</option>
                          <option value="fermented_spider_eye">Fermented_spider_eye</option>
                          <option value="fern">Fern</option>
                          <option value="filled_map">Filled_map</option>
                          <option value="fire">Fire</option>
                          <option value="firework_rocket">Firework_rocket</option>
                          <option value="firework_star">Firework_star</option>
                          <option value="fire_charge">Fire_charge</option>
                          <option value="fire_coral">Fire_coral</option>
                          <option value="fire_coral_block">Fire_coral_block</option>
                          <option value="fire_coral_fan">Fire_coral_fan</option>
                          <option value="fire_coral_wall_fan">Fire_coral_wall_fan</option>
                          <option value="fishing_rod">Fishing_rod</option>
                          <option value="fletching_table">Fletching_table</option>
                          <option value="flint">Flint</option>
                          <option value="flint_and_steel">Flint_and_steel</option>
                          <option value="flower_banner_pattern">Flower_banner_pattern</option>
                          <option value="flower_pot">Flower_pot</option>
                          <option value="fox_spawn_egg">Fox_spawn_egg</option>
                          <option value="frosted_ice">Frosted_ice</option>
                          <option value="furnace">Furnace</option>
                          <option value="furnace_minecart">Furnace_minecart</option>
                        </optgroup>
                        <optgroup label="G">
                          <option value="ghast_spawn_egg">Ghast_spawn_egg</option>
                          <option value="ghast_tear">Ghast_tear</option>
                          <option value="glass">Glass</option>
                          <option value="glass_bottle">Glass_bottle</option>
                          <option value="glass_pane">Glass_pane</option>
                          <option value="glistering_melon_slice">Glistering_melon_slice</option>
                          <option value="globe_banner_pattern">Globe_banner_pattern</option>
                          <option value="glowstone">Glowstone</option>
                          <option value="glowstone_dust">Glowstone_dust</option>
                          <option value="golden_apple">Golden_apple</option>
                          <option value="golden_axe">Golden_axe</option>
                          <option value="golden_boots">Golden_boots</option>
                          <option value="golden_carrot">Golden_carrot</option>
                          <option value="golden_chestplate">Golden_chestplate</option>
                          <option value="golden_helmet">Golden_helmet</option>
                          <option value="golden_hoe">Golden_hoe</option>
                          <option value="golden_horse_armor">Golden_horse_armor</option>
                          <option value="golden_leggings">Golden_leggings</option>
                          <option value="golden_pickaxe">Golden_pickaxe</option>
                          <option value="golden_shovel">Golden_shovel</option>
                          <option value="golden_sword">Golden_sword</option>
                          <option value="gold_block">Gold_block</option>
                          <option value="gold_ingot">Gold_ingot</option>
                          <option value="gold_nugget">Gold_nugget</option>
                          <option value="gold_ore">Gold_ore</option>
                          <option value="granite">Granite</option>
                          <option value="granite_slab">Granite_slab</option>
                          <option value="granite_stairs">Granite_stairs</option>
                          <option value="granite_wall">Granite_wall</option>
                          <option value="grass">Grass</option>
                          <option value="grass_block">Grass_block</option>
                          <option value="grass_path">Grass_path</option>
                          <option value="gravel">Gravel</option>
                          <option value="gray_banner">Gray_banner</option>
                          <option value="gray_bed">Gray_bed</option>
                          <option value="gray_carpet">Gray_carpet</option>
                          <option value="gray_concrete">Gray_concrete</option>
                          <option value="gray_concrete_powder">Gray_concrete_powder</option>
                          <option value="gray_dye">Gray_dye</option>
                          <option value="gray_glazed_terracotta">Gray_glazed_terracotta</option>
                          <option value="gray_shulker_box">Gray_shulker_box</option>
                          <option value="gray_stained_glass">Gray_stained_glass</option>
                          <option value="gray_stained_glass_pane">Gray_stained_glass_pane</option>
                          <option value="gray_terracotta">Gray_terracotta</option>
                          <option value="gray_wall_banner">Gray_wall_banner</option>
                          <option value="gray_wool">Gray_wool</option>
                          <option value="green_banner">Green_banner</option>
                          <option value="green_bed">Green_bed</option>
                          <option value="green_carpet">Green_carpet</option>
                          <option value="green_concrete">Green_concrete</option>
                          <option value="green_concrete_powder">Green_concrete_powder</option>
                          <option value="green_dye">Green_dye</option>
                          <option value="green_glazed_terracotta">Green_glazed_terracotta</option>
                          <option value="green_shulker_box">Green_shulker_box</option>
                          <option value="green_stained_glass">Green_stained_glass</option>
                          <option value="green_stained_glass_pane">Green_stained_glass_pane</option>
                          <option value="green_terracotta">Green_terracotta</option>
                          <option value="green_wall_banner">Green_wall_banner</option>
                          <option value="green_wool">Green_wool</option>
                          <option value="grindstone">Grindstone</option>
                          <option value="guardian_spawn_egg">Guardian_spawn_egg</option>
                          <option value="gunpowder">Gunpowder</option>
                        </optgroup>
                        <optgroup label="H">
                          <option value="hay_block">Hay_block</option>
                          <option value="heart_of_the_sea">Heart_of_the_sea</option>
                          <option value="heavy_weighted_pressure_plate">Heavy_weighted_pressure_plate</option>
                          <option value="hopper">Hopper</option>
                          <option value="hopper_minecart">Hopper_minecart</option>
                          <option value="horn_coral">Horn_coral</option>
                          <option value="horn_coral_block">Horn_coral_block</option>
                          <option value="horn_coral_fan">Horn_coral_fan</option>
                          <option value="horn_coral_wall_fan">Horn_coral_wall_fan</option>
                          <option value="horse_spawn_egg">Horse_spawn_egg</option>
                          <option value="husk_spawn_egg">Husk_spawn_egg</option>
                        </optgroup>
                        <optgroup label="I">
                          <option value="ice">Ice</option>
                          <option value="infested_chiseled_stone_bricks">Infested_chiseled_stone_bricks</option>
                          <option value="infested_cobblestone">Infested_cobblestone</option>
                          <option value="infested_cracked_stone_bricks">Infested_cracked_stone_bricks</option>
                          <option value="infested_mossy_stone_bricks">Infested_mossy_stone_bricks</option>
                          <option value="infested_stone">Infested_stone</option>
                          <option value="infested_stone_bricks">Infested_stone_bricks</option>
                          <option value="ink_sac">Ink_sac</option>
                          <option value="iron_axe">Iron_axe</option>
                          <option value="iron_bars">Iron_bars</option>
                          <option value="iron_block">Iron_block</option>
                          <option value="iron_boots">Iron_boots</option>
                          <option value="iron_chestplate">Iron_chestplate</option>
                          <option value="iron_door">Iron_door</option>
                          <option value="iron_helmet">Iron_helmet</option>
                          <option value="iron_hoe">Iron_hoe</option>
                          <option value="iron_horse_armor">Iron_horse_armor</option>
                          <option value="iron_ingot">Iron_ingot</option>
                          <option value="iron_leggings">Iron_leggings</option>
                          <option value="iron_nugget">Iron_nugget</option>
                          <option value="iron_ore">Iron_ore</option>
                          <option value="iron_pickaxe">Iron_pickaxe</option>
                          <option value="iron_shovel">Iron_shovel</option>
                          <option value="iron_sword">Iron_sword</option>
                          <option value="iron_trapdoor">Iron_trapdoor</option>
                          <option value="item_frame">Item_frame</option>
                        </optgroup>
                        <optgroup label="J">
                          <option value="jack_o_lantern">Jack_o_lantern</option>
                          <option value="jigsaw">Jigsaw</option>
                          <option value="jukebox">Jukebox</option>
                          <option value="jungle_boat">Jungle_boat</option>
                          <option value="jungle_button">Jungle_button</option>
                          <option value="jungle_door">Jungle_door</option>
                          <option value="jungle_fence">Jungle_fence</option>
                          <option value="jungle_fence_gate">Jungle_fence_gate</option>
                          <option value="jungle_leaves">Jungle_leaves</option>
                          <option value="jungle_log">Jungle_log</option>
                          <option value="jungle_planks">Jungle_planks</option>
                          <option value="jungle_pressure_plate">Jungle_pressure_plate</option>
                          <option value="jungle_sapling">Jungle_sapling</option>
                          <option value="jungle_sign">Jungle_sign</option>
                          <option value="jungle_slab">Jungle_slab</option>
                          <option value="jungle_stairs">Jungle_stairs</option>
                          <option value="jungle_trapdoor">Jungle_trapdoor</option>
                          <option value="jungle_wall_sign">Jungle_wall_sign</option>
                          <option value="jungle_wood">Jungle_wood</option>
                        </optgroup>
                        <optgroup label="K">
                          <option value="kelp">Kelp</option>
                          <option value="kelp_plant">Kelp_plant</option>
                          <option value="knowledge_book">Knowledge_book</option>
                        </optgroup>
                        <optgroup label="L">
                          <option value="ladder">Ladder</option>
                          <option value="lantern">Lantern</option>
                          <option value="lapis_block">Lapis_block</option>
                          <option value="lapis_lazuli">Lapis_lazuli</option>
                          <option value="lapis_ore">Lapis_ore</option>
                          <option value="large_fern">Large_fern</option>
                          <option value="lava">Lava</option>
                          <option value="lava_bucket">Lava_bucket</option>
                          <option value="lead">Lead</option>
                          <option value="leather">Leather</option>
                          <option value="leather_boots">Leather_boots</option>
                          <option value="leather_chestplate">Leather_chestplate</option>
                          <option value="leather_helmet">Leather_helmet</option>
                          <option value="leather_horse_armor">Leather_horse_armor</option>
                          <option value="leather_leggings">Leather_leggings</option>
                          <option value="lectern">Lectern</option>
                          <option value="lever">Lever</option>
                          <option value="light_blue_banner">Light_blue_banner</option>
                          <option value="light_blue_bed">Light_blue_bed</option>
                          <option value="light_blue_carpet">Light_blue_carpet</option>
                          <option value="light_blue_concrete">Light_blue_concrete</option>
                          <option value="light_blue_concrete_powder">Light_blue_concrete_powder</option>
                          <option value="light_blue_dye">Light_blue_dye</option>
                          <option value="light_blue_glazed_terracotta">Light_blue_glazed_terracotta</option>
                          <option value="light_blue_shulker_box">Light_blue_shulker_box</option>
                          <option value="light_blue_stained_glass">Light_blue_stained_glass</option>
                          <option value="light_blue_stained_glass_pane">Light_blue_stained_glass_pane</option>
                          <option value="light_blue_terracotta">Light_blue_terracotta</option>
                          <option value="light_blue_wall_banner">Light_blue_wall_banner</option>
                          <option value="light_blue_wool">Light_blue_wool</option>
                          <option value="light_gray_banner">Light_gray_banner</option>
                          <option value="light_gray_bed">Light_gray_bed</option>
                          <option value="light_gray_carpet">Light_gray_carpet</option>
                          <option value="light_gray_concrete">Light_gray_concrete</option>
                          <option value="light_gray_concrete_powder">Light_gray_concrete_powder</option>
                          <option value="light_gray_dye">Light_gray_dye</option>
                          <option value="light_gray_glazed_terracotta">Light_gray_glazed_terracotta</option>
                          <option value="light_gray_shulker_box">Light_gray_shulker_box</option>
                          <option value="light_gray_stained_glass">Light_gray_stained_glass</option>
                          <option value="light_gray_stained_glass_pane">Light_gray_stained_glass_pane</option>
                          <option value="light_gray_terracotta">Light_gray_terracotta</option>
                          <option value="light_gray_wall_banner">Light_gray_wall_banner</option>
                          <option value="light_gray_wool">Light_gray_wool</option>
                          <option value="light_weighted_pressure_plate">Light_weighted_pressure_plate</option>
                          <option value="lilac">Lilac</option>
                          <option value="lily_of_the_valley">Lily_of_the_valley</option>
                          <option value="lily_pad">Lily_pad</option>
                          <option value="lime_banner">Lime_banner</option>
                          <option value="lime_bed">Lime_bed</option>
                          <option value="lime_carpet">Lime_carpet</option>
                          <option value="lime_concrete">Lime_concrete</option>
                          <option value="lime_concrete_powder">Lime_concrete_powder</option>
                          <option value="lime_dye">Lime_dye</option>
                          <option value="lime_glazed_terracotta">Lime_glazed_terracotta</option>
                          <option value="lime_shulker_box">Lime_shulker_box</option>
                          <option value="lime_stained_glass">Lime_stained_glass</option>
                          <option value="lime_stained_glass_pane">Lime_stained_glass_pane</option>
                          <option value="lime_terracotta">Lime_terracotta</option>
                          <option value="lime_wall_banner">Lime_wall_banner</option>
                          <option value="lime_wool">Lime_wool</option>
                          <option value="lingering_potion">Lingering_potion</option>
                          <option value="llama_spawn_egg">Llama_spawn_egg</option>
                          <option value="loom">Loom</option>
                        </optgroup>
                        <optgroup label="M">
                          <option value="magenta_banner">Magenta_banner</option>
                          <option value="magenta_bed">Magenta_bed</option>
                          <option value="magenta_carpet">Magenta_carpet</option>
                          <option value="magenta_concrete">Magenta_concrete</option>
                          <option value="magenta_concrete_powder">Magenta_concrete_powder</option>
                          <option value="magenta_dye">Magenta_dye</option>
                          <option value="magenta_glazed_terracotta">Magenta_glazed_terracotta</option>
                          <option value="magenta_shulker_box">Magenta_shulker_box</option>
                          <option value="magenta_stained_glass">Magenta_stained_glass</option>
                          <option value="magenta_stained_glass_pane">Magenta_stained_glass_pane</option>
                          <option value="magenta_terracotta">Magenta_terracotta</option>
                          <option value="magenta_wall_banner">Magenta_wall_banner</option>
                          <option value="magenta_wool">Magenta_wool</option>
                          <option value="magma_block">Magma_block</option>
                          <option value="magma_cream">Magma_cream</option>
                          <option value="magma_cube_spawn_egg">Magma_cube_spawn_egg</option>
                          <option value="map">Map</option>
                          <option value="melon">Melon</option>
                          <option value="melon_seeds">Melon_seeds</option>
                          <option value="melon_slice">Melon_slice</option>
                          <option value="melon_stem">Melon_stem</option>
                          <option value="milk_bucket">Milk_bucket</option>
                          <option value="minecart">Minecart</option>
                          <option value="mojang_banner_pattern">Mojang_banner_pattern</option>
                          <option value="mooshroom_spawn_egg">Mooshroom_spawn_egg</option>
                          <option value="mossy_cobblestone">Mossy_cobblestone</option>
                          <option value="mossy_cobblestone_slab">Mossy_cobblestone_slab</option>
                          <option value="mossy_cobblestone_stairs">Mossy_cobblestone_stairs</option>
                          <option value="mossy_cobblestone_wall">Mossy_cobblestone_wall</option>
                          <option value="mossy_stone_bricks">Mossy_stone_bricks</option>
                          <option value="mossy_stone_brick_slab">Mossy_stone_brick_slab</option>
                          <option value="mossy_stone_brick_stairs">Mossy_stone_brick_stairs</option>
                          <option value="mossy_stone_brick_wall">Mossy_stone_brick_wall</option>
                          <option value="moving_piston">Moving_piston</option>
                          <option value="mule_spawn_egg">Mule_spawn_egg</option>
                          <option value="mushroom_stem">Mushroom_stem</option>
                          <option value="mushroom_stew">Mushroom_stew</option>
                          <option value="music_disc_11">Music_disc_11</option>
                          <option value="music_disc_13">Music_disc_13</option>
                          <option value="music_disc_blocks">Music_disc_blocks</option>
                          <option value="music_disc_cat">Music_disc_cat</option>
                          <option value="music_disc_chirp">Music_disc_chirp</option>
                          <option value="music_disc_far">Music_disc_far</option>
                          <option value="music_disc_mall">Music_disc_mall</option>
                          <option value="music_disc_mellohi">Music_disc_mellohi</option>
                          <option value="music_disc_stal">Music_disc_stal</option>
                          <option value="music_disc_strad">Music_disc_strad</option>
                          <option value="music_disc_wait">Music_disc_wait</option>
                          <option value="music_disc_ward">Music_disc_ward</option>
                          <option value="mutton">Mutton</option>
                          <option value="mycelium">Mycelium</option>
                        </optgroup>
                        <optgroup label="N">
                          <option value="name_tag">Name_tag</option>
                          <option value="nautilus_shell">Nautilus_shell</option>
                          <option value="netherrack">Netherrack</option>
                          <option value="nether_brick">Nether_brick</option>
                          <option value="nether_bricks">Nether_bricks</option>
                          <option value="nether_brick_fence">Nether_brick_fence</option>
                          <option value="nether_brick_slab">Nether_brick_slab</option>
                          <option value="nether_brick_stairs">Nether_brick_stairs</option>
                          <option value="nether_brick_wall">Nether_brick_wall</option>
                          <option value="nether_portal">Nether_portal</option>
                          <option value="nether_quartz_ore">Nether_quartz_ore</option>
                          <option value="nether_star">Nether_star</option>
                          <option value="nether_wart">Nether_wart</option>
                          <option value="nether_wart_block">Nether_wart_block</option>
                          <option value="note_block">Note_block</option>
                        </optgroup>
                        <optgroup label="O">
                          <option value="oak_boat">Oak_boat</option>
                          <option value="oak_button">Oak_button</option>
                          <option value="oak_door">Oak_door</option>
                          <option value="oak_fence">Oak_fence</option>
                          <option value="oak_fence_gate">Oak_fence_gate</option>
                          <option value="oak_leaves">Oak_leaves</option>
                          <option value="oak_log">Oak_log</option>
                          <option value="oak_planks">Oak_planks</option>
                          <option value="oak_pressure_plate">Oak_pressure_plate</option>
                          <option value="oak_sapling">Oak_sapling</option>
                          <option value="oak_sign">Oak_sign</option>
                          <option value="oak_slab">Oak_slab</option>
                          <option value="oak_stairs">Oak_stairs</option>
                          <option value="oak_trapdoor">Oak_trapdoor</option>
                          <option value="oak_wall_sign">Oak_wall_sign</option>
                          <option value="oak_wood">Oak_wood</option>
                          <option value="observer">Observer</option>
                          <option value="obsidian">Obsidian</option>
                          <option value="ocelot_spawn_egg">Ocelot_spawn_egg</option>
                          <option value="orange_banner">Orange_banner</option>
                          <option value="orange_bed">Orange_bed</option>
                          <option value="orange_carpet">Orange_carpet</option>
                          <option value="orange_concrete">Orange_concrete</option>
                          <option value="orange_concrete_powder">Orange_concrete_powder</option>
                          <option value="orange_dye">Orange_dye</option>
                          <option value="orange_glazed_terracotta">Orange_glazed_terracotta</option>
                          <option value="orange_shulker_box">Orange_shulker_box</option>
                          <option value="orange_stained_glass">Orange_stained_glass</option>
                          <option value="orange_stained_glass_pane">Orange_stained_glass_pane</option>
                          <option value="orange_terracotta">Orange_terracotta</option>
                          <option value="orange_tulip">Orange_tulip</option>
                          <option value="orange_wall_banner">Orange_wall_banner</option>
                          <option value="orange_wool">Orange_wool</option>
                          <option value="oxeye_daisy">Oxeye_daisy</option>
                        </optgroup>
                        <optgroup label="P">
                          <option value="packed_ice">Packed_ice</option>
                          <option value="painting">Painting</option>
                          <option value="panda_spawn_egg">Panda_spawn_egg</option>
                          <option value="paper">Paper</option>
                          <option value="parrot_spawn_egg">Parrot_spawn_egg</option>
                          <option value="peony">Peony</option>
                          <option value="petrified_oak_slab">Petrified_oak_slab</option>
                          <option value="phantom_membrane">Phantom_membrane</option>
                          <option value="phantom_spawn_egg">Phantom_spawn_egg</option>
                          <option value="pig_spawn_egg">Pig_spawn_egg</option>
                          <option value="pillager_spawn_egg">Pillager_spawn_egg</option>
                          <option value="pink_banner">Pink_banner</option>
                          <option value="pink_bed">Pink_bed</option>
                          <option value="pink_carpet">Pink_carpet</option>
                          <option value="pink_concrete">Pink_concrete</option>
                          <option value="pink_concrete_powder">Pink_concrete_powder</option>
                          <option value="pink_dye">Pink_dye</option>
                          <option value="pink_glazed_terracotta">Pink_glazed_terracotta</option>
                          <option value="pink_shulker_box">Pink_shulker_box</option>
                          <option value="pink_stained_glass">Pink_stained_glass</option>
                          <option value="pink_stained_glass_pane">Pink_stained_glass_pane</option>
                          <option value="pink_terracotta">Pink_terracotta</option>
                          <option value="pink_tulip">Pink_tulip</option>
                          <option value="pink_wall_banner">Pink_wall_banner</option>
                          <option value="pink_wool">Pink_wool</option>
                          <option value="piston">Piston</option>
                          <option value="piston_head">Piston_head</option>
                          <option value="player_head">Player_head</option>
                          <option value="player_wall_head">Player_wall_head</option>
                          <option value="podzol">Podzol</option>
                          <option value="poisonous_potato">Poisonous_potato</option>
                          <option value="polar_bear_spawn_egg">Polar_bear_spawn_egg</option>
                          <option value="polished_andesite">Polished_andesite</option>
                          <option value="polished_andesite_slab">Polished_andesite_slab</option>
                          <option value="polished_andesite_stairs">Polished_andesite_stairs</option>
                          <option value="polished_diorite">Polished_diorite</option>
                          <option value="polished_diorite_slab">Polished_diorite_slab</option>
                          <option value="polished_diorite_stairs">Polished_diorite_stairs</option>
                          <option value="polished_granite">Polished_granite</option>
                          <option value="polished_granite_slab">Polished_granite_slab</option>
                          <option value="polished_granite_stairs">Polished_granite_stairs</option>
                          <option value="popped_chorus_fruit">Popped_chorus_fruit</option>
                          <option value="poppy">Poppy</option>
                          <option value="porkchop">Porkchop</option>
                          <option value="potato">Potato</option>
                          <option value="potatoes">Potatoes</option>
                          <option value="potion">Potion</option>
                          <option value="potted_acacia_sapling">Potted_acacia_sapling</option>
                          <option value="potted_allium">Potted_allium</option>
                          <option value="potted_azure_bluet">Potted_azure_bluet</option>
                          <option value="potted_bamboo">Potted_bamboo</option>
                          <option value="potted_birch_sapling">Potted_birch_sapling</option>
                          <option value="potted_blue_orchid">Potted_blue_orchid</option>
                          <option value="potted_brown_mushroom">Potted_brown_mushroom</option>
                          <option value="potted_cactus">Potted_cactus</option>
                          <option value="potted_cornflower">Potted_cornflower</option>
                          <option value="potted_dandelion">Potted_dandelion</option>
                          <option value="potted_dark_oak_sapling">Potted_dark_oak_sapling</option>
                          <option value="potted_dead_bush">Potted_dead_bush</option>
                          <option value="potted_fern">Potted_fern</option>
                          <option value="potted_jungle_sapling">Potted_jungle_sapling</option>
                          <option value="potted_lily_of_the_valley">Potted_lily_of_the_valley</option>
                          <option value="potted_oak_sapling">Potted_oak_sapling</option>
                          <option value="potted_orange_tulip">Potted_orange_tulip</option>
                          <option value="potted_oxeye_daisy">Potted_oxeye_daisy</option>
                          <option value="potted_pink_tulip">Potted_pink_tulip</option>
                          <option value="potted_poppy">Potted_poppy</option>
                          <option value="potted_red_mushroom">Potted_red_mushroom</option>
                          <option value="potted_red_tulip">Potted_red_tulip</option>
                          <option value="potted_spruce_sapling">Potted_spruce_sapling</option>
                          <option value="potted_white_tulip">Potted_white_tulip</option>
                          <option value="potted_wither_rose">Potted_wither_rose</option>
                          <option value="powered_rail">Powered_rail</option>
                          <option value="prismarine">Prismarine</option>
                          <option value="prismarine_bricks">Prismarine_bricks</option>
                          <option value="prismarine_brick_slab">Prismarine_brick_slab</option>
                          <option value="prismarine_brick_stairs">Prismarine_brick_stairs</option>
                          <option value="prismarine_crystals">Prismarine_crystals</option>
                          <option value="prismarine_shard">Prismarine_shard</option>
                          <option value="prismarine_slab">Prismarine_slab</option>
                          <option value="prismarine_stairs">Prismarine_stairs</option>
                          <option value="prismarine_wall">Prismarine_wall</option>
                          <option value="pufferfish">Pufferfish</option>
                          <option value="pufferfish_bucket">Pufferfish_bucket</option>
                          <option value="pufferfish_spawn_egg">Pufferfish_spawn_egg</option>
                          <option value="pumpkin">Pumpkin</option>
                          <option value="pumpkin_pie">Pumpkin_pie</option>
                          <option value="pumpkin_seeds">Pumpkin_seeds</option>
                          <option value="pumpkin_stem">Pumpkin_stem</option>
                          <option value="purple_banner">Purple_banner</option>
                          <option value="purple_bed">Purple_bed</option>
                          <option value="purple_carpet">Purple_carpet</option>
                          <option value="purple_concrete">Purple_concrete</option>
                          <option value="purple_concrete_powder">Purple_concrete_powder</option>
                          <option value="purple_dye">Purple_dye</option>
                          <option value="purple_glazed_terracotta">Purple_glazed_terracotta</option>
                          <option value="purple_shulker_box">Purple_shulker_box</option>
                          <option value="purple_stained_glass">Purple_stained_glass</option>
                          <option value="purple_stained_glass_pane">Purple_stained_glass_pane</option>
                          <option value="purple_terracotta">Purple_terracotta</option>
                          <option value="purple_wall_banner">Purple_wall_banner</option>
                          <option value="purple_wool">Purple_wool</option>
                          <option value="purpur_block">Purpur_block</option>
                          <option value="purpur_pillar">Purpur_pillar</option>
                          <option value="purpur_slab">Purpur_slab</option>
                          <option value="purpur_stairs">Purpur_stairs</option>
                        </optgroup>
                        <optgroup label="Q">
                          <option value="quartz">Quartz</option>
                          <option value="quartz_block">Quartz_block</option>
                          <option value="quartz_pillar">Quartz_pillar</option>
                          <option value="quartz_slab">Quartz_slab</option>
                        </optgroup>
                        <optgroup label="R">
                          <option value="quartz_stairs">Quartz_stairs</option>
                          <option value="rabbit">Rabbit</option>
                          <option value="rabbit_foot">Rabbit_foot</option>
                          <option value="rabbit_hide">Rabbit_hide</option>
                          <option value="rabbit_spawn_egg">Rabbit_spawn_egg</option>
                          <option value="rabbit_stew">Rabbit_stew</option>
                          <option value="rail">Rail</option>
                          <option value="ravager_spawn_egg">Ravager_spawn_egg</option>
                          <option value="redstone">Redstone</option>
                          <option value="redstone_block">Redstone_block</option>
                          <option value="redstone_lamp">Redstone_lamp</option>
                          <option value="redstone_ore">Redstone_ore</option>
                          <option value="redstone_torch">Redstone_torch</option>
                          <option value="redstone_wall_torch">Redstone_wall_torch</option>
                          <option value="redstone_wire">Redstone_wire</option>
                          <option value="red_banner">Red_banner</option>
                          <option value="red_bed">Red_bed</option>
                          <option value="red_carpet">Red_carpet</option>
                          <option value="red_concrete">Red_concrete</option>
                          <option value="red_concrete_powder">Red_concrete_powder</option>
                          <option value="red_dye">Red_dye</option>
                          <option value="red_glazed_terracotta">Red_glazed_terracotta</option>
                          <option value="red_mushroom">Red_mushroom</option>
                          <option value="red_mushroom_block">Red_mushroom_block</option>
                          <option value="red_nether_bricks">Red_nether_bricks</option>
                          <option value="red_nether_brick_slab">Red_nether_brick_slab</option>
                          <option value="red_nether_brick_stairs">Red_nether_brick_stairs</option>
                          <option value="red_nether_brick_wall">Red_nether_brick_wall</option>
                          <option value="red_sand">Red_sand</option>
                          <option value="red_sandstone">Red_sandstone</option>
                          <option value="red_sandstone_slab">Red_sandstone_slab</option>
                          <option value="red_sandstone_stairs">Red_sandstone_stairs</option>
                          <option value="red_sandstone_wall">Red_sandstone_wall</option>
                          <option value="red_shulker_box">Red_shulker_box</option>
                          <option value="red_stained_glass">Red_stained_glass</option>
                          <option value="red_stained_glass_pane">Red_stained_glass_pane</option>
                          <option value="red_terracotta">Red_terracotta</option>
                          <option value="red_tulip">Red_tulip</option>
                          <option value="red_wall_banner">Red_wall_banner</option>
                          <option value="red_wool">Red_wool</option>
                          <option value="repeater">Repeater</option>
                          <option value="repeating_command_block">Repeating_command_block</option>
                          <option value="rose_bush">Rose_bush</option>
                          <option value="rotten_flesh">Rotten_flesh</option>
                        </optgroup>
                        <optgroup label="S">
                          <option value="saddle">Saddle</option>
                          <option value="salmon">Salmon</option>
                          <option value="salmon_bucket">Salmon_bucket</option>
                          <option value="salmon_spawn_egg">Salmon_spawn_egg</option>
                          <option value="sand">Sand</option>
                          <option value="sandstone">Sandstone</option>
                          <option value="sandstone_slab">Sandstone_slab</option>
                          <option value="sandstone_stairs">Sandstone_stairs</option>
                          <option value="sandstone_wall">Sandstone_wall</option>
                          <option value="scaffolding">Scaffolding</option>
                          <option value="scute">Scute</option>
                          <option value="seagrass">Seagrass</option>
                          <option value="sea_lantern">Sea_lantern</option>
                          <option value="sea_pickle">Sea_pickle</option>
                          <option value="shears">Shears</option>
                          <option value="sheep_spawn_egg">Sheep_spawn_egg</option>
                          <option value="shield">Shield</option>
                          <option value="shulker_box">Shulker_box</option>
                          <option value="shulker_shell">Shulker_shell</option>
                          <option value="shulker_spawn_egg">Shulker_spawn_egg</option>
                          <option value="silverfish_spawn_egg">Silverfish_spawn_egg</option>
                          <option value="skeleton_horse_spawn_egg">Skeleton_horse_spawn_egg</option>
                          <option value="skeleton_skull">Skeleton_skull</option>
                          <option value="skeleton_spawn_egg">Skeleton_spawn_egg</option>
                          <option value="skeleton_wall_skull">Skeleton_wall_skull</option>
                          <option value="skull_banner_pattern">Skull_banner_pattern</option>
                          <option value="slime_ball">Slime_ball</option>
                          <option value="slime_block">Slime_block</option>
                          <option value="slime_spawn_egg">Slime_spawn_egg</option>
                          <option value="smithing_table">Smithing_table</option>
                          <option value="smoker">Smoker</option>
                          <option value="smooth_quartz">Smooth_quartz</option>
                          <option value="smooth_quartz_slab">Smooth_quartz_slab</option>
                          <option value="smooth_quartz_stairs">Smooth_quartz_stairs</option>
                          <option value="smooth_red_sandstone">Smooth_red_sandstone</option>
                          <option value="smooth_red_sandstone_slab">Smooth_red_sandstone_slab</option>
                          <option value="smooth_red_sandstone_stairs">Smooth_red_sandstone_stairs</option>
                          <option value="smooth_sandstone">Smooth_sandstone</option>
                          <option value="smooth_sandstone_slab">Smooth_sandstone_slab</option>
                          <option value="smooth_sandstone_stairs">Smooth_sandstone_stairs</option>
                          <option value="smooth_stone">Smooth_stone</option>
                          <option value="smooth_stone_slab">Smooth_stone_slab</option>
                          <option value="snow">Snow</option>
                          <option value="snowball">Snowball</option>
                          <option value="snow_block">Snow_block</option>
                          <option value="soul_sand">Soul_sand</option>
                          <option value="spawner">Spawner</option>
                          <option value="spectral_arrow">Spectral_arrow</option>
                          <option value="spider_eye">Spider_eye</option>
                          <option value="spider_spawn_egg">Spider_spawn_egg</option>
                          <option value="splash_potion">Splash_potion</option>
                          <option value="sponge">Sponge</option>
                          <option value="spruce_boat">Spruce_boat</option>
                          <option value="spruce_button">Spruce_button</option>
                          <option value="spruce_door">Spruce_door</option>
                          <option value="spruce_fence">Spruce_fence</option>
                          <option value="spruce_fence_gate">Spruce_fence_gate</option>
                          <option value="spruce_leaves">Spruce_leaves</option>
                          <option value="spruce_log">Spruce_log</option>
                          <option value="spruce_planks">Spruce_planks</option>
                          <option value="spruce_pressure_plate">Spruce_pressure_plate</option>
                          <option value="spruce_sapling">Spruce_sapling</option>
                          <option value="spruce_sign">Spruce_sign</option>
                          <option value="spruce_slab">Spruce_slab</option>
                          <option value="spruce_stairs">Spruce_stairs</option>
                          <option value="spruce_trapdoor">Spruce_trapdoor</option>
                          <option value="spruce_wall_sign">Spruce_wall_sign</option>
                          <option value="spruce_wood">Spruce_wood</option>
                          <option value="squid_spawn_egg">Squid_spawn_egg</option>
                          <option value="stick">Stick</option>
                          <option value="sticky_piston">Sticky_piston</option>
                          <option value="stone">Stone</option>
                          <option value="stonecutter">Stonecutter</option>
                          <option value="stone_axe">Stone_axe</option>
                          <option value="stone_bricks">Stone_bricks</option>
                          <option value="stone_brick_slab">Stone_brick_slab</option>
                          <option value="stone_brick_stairs">Stone_brick_stairs</option>
                          <option value="stone_brick_wall">Stone_brick_wall</option>
                          <option value="stone_button">Stone_button</option>
                          <option value="stone_hoe">Stone_hoe</option>
                          <option value="stone_pickaxe">Stone_pickaxe</option>
                          <option value="stone_pressure_plate">Stone_pressure_plate</option>
                          <option value="stone_shovel">Stone_shovel</option>
                          <option value="stone_slab">Stone_slab</option>
                          <option value="stone_stairs">Stone_stairs</option>
                          <option value="stone_sword">Stone_sword</option>
                          <option value="stray_spawn_egg">Stray_spawn_egg</option>
                          <option value="string">String</option>
                          <option value="stripped_acacia_log">Stripped_acacia_log</option>
                          <option value="stripped_acacia_wood">Stripped_acacia_wood</option>
                          <option value="stripped_birch_log">Stripped_birch_log</option>
                          <option value="stripped_birch_wood">Stripped_birch_wood</option>
                          <option value="stripped_dark_oak_log">Stripped_dark_oak_log</option>
                          <option value="stripped_dark_oak_wood">Stripped_dark_oak_wood</option>
                          <option value="stripped_jungle_log">Stripped_jungle_log</option>
                          <option value="stripped_jungle_wood">Stripped_jungle_wood</option>
                          <option value="stripped_oak_log">Stripped_oak_log</option>
                          <option value="stripped_oak_wood">Stripped_oak_wood</option>
                          <option value="stripped_spruce_log">Stripped_spruce_log</option>
                          <option value="stripped_spruce_wood">Stripped_spruce_wood</option>
                          <option value="structure_block">Structure_block</option>
                          <option value="structure_void">Structure_void</option>
                          <option value="sugar">Sugar</option>
                          <option value="sugar_cane">Sugar_cane</option>
                          <option value="sunflower">Sunflower</option>
                          <option value="suspicious_stew">Suspicious_stew</option>
                          <option value="sweet_berries">Sweet_berries</option>
                          <option value="sweet_berry_bush">Sweet_berry_bush</option>
                        </optgroup>
                        <optgroup label="T">
                          <option value="tall_grass">Tall_grass</option>
                          <option value="tall_seagrass">Tall_seagrass</option>
                          <option value="terracotta">Terracotta</option>
                          <option value="tipped_arrow">Tipped_arrow</option>
                          <option value="tnt">Tnt</option>
                          <option value="tnt_minecart">Tnt_minecart</option>
                          <option value="torch">Torch</option>
                          <option value="totem_of_undying">Totem_of_undying</option>
                          <option value="trader_llama_spawn_egg">Trader_llama_spawn_egg</option>
                          <option value="trapped_chest">Trapped_chest</option>
                          <option value="trident">Trident</option>
                          <option value="tripwire">Tripwire</option>
                          <option value="tripwire_hook">Tripwire_hook</option>
                          <option value="tropical_fish">Tropical_fish</option>
                          <option value="tropical_fish_bucket">Tropical_fish_bucket</option>
                          <option value="tropical_fish_spawn_egg">Tropical_fish_spawn_egg</option>
                          <option value="tube_coral">Tube_coral</option>
                          <option value="tube_coral_block">Tube_coral_block</option>
                          <option value="tube_coral_fan">Tube_coral_fan</option>
                          <option value="tube_coral_wall_fan">Tube_coral_wall_fan</option>
                          <option value="turtle_egg">Turtle_egg</option>
                          <option value="turtle_helmet">Turtle_helmet</option>
                          <option value="turtle_spawn_egg">Turtle_spawn_egg</option>
                        </optgroup>
                        <optgroup label="V">
                          <option value="vex_spawn_egg">Vex_spawn_egg</option>
                          <option value="villager_spawn_egg">Villager_spawn_egg</option>
                          <option value="vindicator_spawn_egg">Vindicator_spawn_egg</option>
                          <option value="vine">Vine</option>
                          <option value="void_air">Void_air</option>
                        </optgroup>
                        <optgroup label="W">
                          <option value="wall_torch">Wall_torch</option>
                          <option value="wandering_trader_spawn_egg">Wandering_trader_spawn_egg</option>
                          <option value="water">Water</option>
                          <option value="water_bucket">Water_bucket</option>
                          <option value="wet_sponge">Wet_sponge</option>
                          <option value="wheat">Wheat</option>
                          <option value="wheat_seeds">Wheat_seeds</option>
                          <option value="white_banner">White_banner</option>
                          <option value="white_bed">White_bed</option>
                          <option value="white_carpet">White_carpet</option>
                          <option value="white_concrete">White_concrete</option>
                          <option value="white_concrete_powder">White_concrete_powder</option>
                          <option value="white_dye">White_dye</option>
                          <option value="white_glazed_terracotta">White_glazed_terracotta</option>
                          <option value="white_shulker_box">White_shulker_box</option>
                          <option value="white_stained_glass">White_stained_glass</option>
                          <option value="white_stained_glass_pane">White_stained_glass_pane</option>
                          <option value="white_terracotta">White_terracotta</option>
                          <option value="white_tulip">White_tulip</option>
                          <option value="white_wall_banner">White_wall_banner</option>
                          <option value="white_wool">White_wool</option>
                          <option value="witch_spawn_egg">Witch_spawn_egg</option>
                          <option value="wither_rose">Wither_rose</option>
                          <option value="wither_skeleton_skull">Wither_skeleton_skull</option>
                          <option value="wither_skeleton_spawn_egg">Wither_skeleton_spawn_egg</option>
                          <option value="wither_skeleton_wall_skull">Wither_skeleton_wall_skull</option>
                          <option value="wolf_spawn_egg">Wolf_spawn_egg</option>
                          <option value="wooden_axe">Wooden_axe</option>
                          <option value="wooden_hoe">Wooden_hoe</option>
                          <option value="wooden_pickaxe">Wooden_pickaxe</option>
                          <option value="wooden_shovel">Wooden_shovel</option>
                          <option value="wooden_sword">Wooden_sword</option>
                          <option value="writable_book">Writable_book</option>
                          <option value="written_book">Written_book</option>
                        </optgroup>
                        <optgroup label="Y">
                          <option value="yellow_banner">Yellow_banner</option>
                          <option value="yellow_bed">Yellow_bed</option>
                          <option value="yellow_carpet">Yellow_carpet</option>
                          <option value="yellow_concrete">Yellow_concrete</option>
                          <option value="yellow_concrete_powder">Yellow_concrete_powder</option>
                          <option value="yellow_dye">Yellow_dye</option>
                          <option value="yellow_glazed_terracotta">Yellow_glazed_terracotta</option>
                          <option value="yellow_shulker_box">Yellow_shulker_box</option>
                          <option value="yellow_stained_glass">Yellow_stained_glass</option>
                          <option value="yellow_stained_glass_pane">Yellow_stained_glass_pane</option>
                          <option value="yellow_terracotta">Yellow_terracotta</option>
                          <option value="yellow_wall_banner">Yellow_wall_banner</option>
                          <option value="yellow_wool">Yellow_wool</option>
                        </optgroup>
                        <optgroup label="Z">
                          <option value="zombie_head">Zombie_head</option>
                          <option value="zombie_horse_spawn_egg">Zombie_horse_spawn_egg</option>
                          <option value="zombie_pigman_spawn_egg">Zombie_pigman_spawn_egg</option>
                          <option value="zombie_spawn_egg">Zombie_spawn_egg</option>
                          <option value="zombie_villager_spawn_egg">Zombie_villager_spawn_egg</option>
                          <option value="zombie_wall_head">Zombie_wall_head</option>
                        </optgroup>
                        </select>
                </div>

                <div class="form-group">
                  <label>Entities</label>
                  <select name="entity_type" class="form-control">
                      <optgroup label="Options">
                    <option value="false">None</option>
                      </optgroup>
                      <optgroup label="Custom">
                        <option value="experience_orb">Experience_orb</option>
                        <option value="area_effect_cloud">Area_effect_cloud</option>
                        <option value="elder_guardian">Elder_guardian</option>
                        <option value="wither_skeleton">Wither_skeleton</option>
                        <option value="stray">Stray</option>
                        <option value="egg">Egg</option>
                        <option value="leash_hitch">Leash_hitch</option>
                        <option value="painting">Painting</option>
                        <option value="arrow">Arrow</option>
                        <option value="snowball">Snowball</option>
                        <option value="fireball">Fireball</option>
                        <option value="small_fireball">Small_fireball</option>
                        <option value="ender_pearl">Ender_pearl</option>
                        <option value="ender_signal">Ender_signal</option>
                        <option value="splash_potion">Splash_potion</option>
                        <option value="thrown_exp_bottle">Thrown_exp_bottle</option>
                        <option value="item_frame">Item_frame</option>
                        <option value="wither_skull">Wither_skull</option>
                        <option value="primed_tnt">Primed_tnt</option>
                        <option value="falling_block">Falling_block</option>
                        <option value="firework">Firework</option>
                        <option value="husk">Husk</option>
                        <option value="spectral_arrow">Spectral_arrow</option>
                        <option value="shulker_bullet">Shulker_bullet</option>
                        <option value="dragon_fireball">Dragon_fireball</option>
                        <option value="zombie_villager">Zombie_villager</option>
                        <option value="skeleton_horse">Skeleton_horse</option>
                        <option value="zombie_horse">Zombie_horse</option>
                        <option value="armor_stand">Armor_stand</option>
                        <option value="donkey">Donkey</option>
                        <option value="mule">Mule</option>
                        <option value="evoker_fangs">Evoker_fangs</option>
                        <option value="evoker">Evoker</option>
                        <option value="vex">Vex</option>
                        <option value="vindicator">Vindicator</option>
                        <option value="illusioner">Illusioner</option>
                        <option value="minecart_command">Minecart_command</option>
                        <option value="boat">Boat</option>
                        <option value="minecart">Minecart</option>
                        <option value="minecart_chest">Minecart_chest</option>
                        <option value="minecart_furnace">Minecart_furnace</option>
                        <option value="minecart_tnt">Minecart_tnt</option>
                        <option value="minecart_hopper">Minecart_hopper</option>
                        <option value="minecart_mob_spawner">Minecart_mob_spawner</option>
                        <option value="creeper">Creeper</option>
                        <option value="skeleton">Skeleton</option>
                        <option value="spider">Spider</option>
                        <option value="giant">Giant</option>
                        <option value="zombie">Zombie</option>
                        <option value="slime">Slime</option>
                        <option value="ghast">Ghast</option>
                        <option value="pig_zombie">Pig_zombie</option>
                        <option value="enderman">Enderman</option>
                        <option value="cave_spider">Cave_spider</option>
                        <option value="silverfish">Silverfish</option>
                        <option value="blaze">Blaze</option>
                        <option value="magma_cube">Magma_cube</option>
                        <option value="ender_dragon">Ender_dragon</option>
                        <option value="wither">Wither</option>
                        <option value="bat">Bat</option>
                        <option value="witch">Witch</option>
                        <option value="endermite">Endermite</option>
                        <option value="guardian">Guardian</option>
                        <option value="shulker">Shulker</option>
                        <option value="pig">Pig</option>
                        <option value="sheep">Sheep</option>
                        <option value="cow">Cow</option>
                        <option value="chicken">Chicken</option>
                        <option value="squid">Squid</option>
                        <option value="wolf">Wolf</option>
                        <option value="mushroom_cow">Mushroom_cow</option>
                        <option value="snowman">Snowman</option>
                        <option value="ocelot">Ocelot</option>
                        <option value="iron_golem">Iron_golem</option>
                        <option value="horse">Horse</option>
                        <option value="rabbit">Rabbit</option>
                        <option value="polar_bear">Polar_bear</option>
                        <option value="llama">Llama</option>
                        <option value="llama_spit">Llama_spit</option>
                        <option value="parrot">Parrot</option>
                        <option value="villager">Villager</option>
                        <option value="ender_crystal">Ender_crystal</option>
                        <option value="turtle">Turtle</option>
                        <option value="phantom">Phantom</option>
                        <option value="trident">Trident</option>
                        <option value="cod">Cod</option>
                        <option value="salmon">Salmon</option>
                        <option value="pufferfish">Pufferfish</option>
                        <option value="tropical_fish">Tropical_fish</option>
                        <option value="drowned">Drowned</option>
                        <option value="dolphin">Dolphin</option>
                        <option value="cat">Cat</option>
                        <option value="panda">Panda</option>
                        <option value="pillager">Pillager</option>
                        <option value="ravager">Ravager</option>
                        <option value="trader_llama">Trader_llama</option>
                        <option value="wandering_trader">Wandering_trader</option>
                        <option value="fox">Fox</option>
                        <option value="fishing_hook">Fishing_hook</option>
                        <option value="lightning">Lightning</option>
                        <option value="player">Player</option>
                      </optgroup>
                  </select>
                </div>

                <div class="form-group">
                  <label>Goal</label>
                  <input class="form-control" type="number" name="goal" value="" placeholder="100" maxlength="10" required>
                </div>

                <div class="form-group">
                  <label>Title</label>
                  <input class="form-control" type="text" name="title" value="" placeholder="My achievement" maxlength="75" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input class="form-control" type="text" name="description" value="" placeholder="Gotta craft them all" maxlength="120" required>
                </div>
                <div class="form-group">
                  <label>Codename</label>
                  <input class="form-control" type="text" name="code" value="" placeholder="AC130" maxlength="30" required>
                </div>

                <div class="form-group">
                  <label>Add rewards</label>
                  <select name="reward_type" class="form-control" required>
                      <optgroup label="Options">
                    <option value="false">No</option>
                      </optgroup>
                      <optgroup label="Rewards">
                    <option value="Money">Pixels</option>
                    <option value="Experience">Experience</option>
                    <option value="IncreaseMaxOxygen">Increase oxygen</option>
                    <option value="IncreaseMaxHealth">Increase health</option>
                    <option value="Item">Item</option>
                    <option value="Execute">Custom</option>
                      </optgroup>
                  </select>
                </div>

                <div class="form-group">
                  <label>Reward options</label>
                  <input class="form-control" type="text" name="reward" value="" placeholder="30" maxlength="75">
                </div>

                <div class="btn-group mr-2">
                  <button type="submit" class="btn btn-success">Add</button>
                  <button type="reset" class="btn btn-warning">Clear form</button>
                </div>
            </div>

            </div>
        </div>
            </form>
          <!-- End of form -->


        </div>
    </div>
<!-- End of modal layer -->





  <!-- Modal layer (UFID_CATALOGUE) -->
<div class="modal fade" id="ufid_products" tabindex="-1" role="dialog" aria-labelledby="ufid_products" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">


                <h5 class="modal-title" id="ufid_products">New item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Form -->
            <form method="post" name="ufid_catalogue" id="ufid_catalogue" action="handler/new-product.php" enctype="utf-8" autocomplete="off">
              <!-- Form identification -->
              <input type="hidden" name="form_name" id="form_name" value="ufid_catalogue">
              <input type="hidden" name="action" id="action" value="new">
              <div class="modal-body">
                <div class="form-group">
                  <label>Product</label>
                  <input class="form-control" type="text" name="name" value="" placeholder="Tatsumaki roll" maxlength="50">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="type">
                    <option value="clothing">Clothing</option>
                    <option value="food">Food</option>
                    <option value="beverages">Beverages</option>
                    <option value="seeds">Seeds</option>
                    <option value="blocks">Blocks</option>
                    <option value="seasonal">Seasonal</option>
                    <option value="limited">Limited edition</option>
                    <option value="bilderberg">Club Bilderberg</option>
                  </select>
                <div class="form-group">
                  <label>Price</label>
                  <input class="form-control" type="number" name="price" value="" placeholder="100" maxlength="10">
                </div>
                <div class="form-group">
                  <label>Send command</label>
                  <input class="form-control" type="text" name="command" value="" placeholder="" maxlength="120">
                </div>
                <div class="form-group">
                  <label>Picture</label>
                  <input class="form-control" type="text" name="displaypic" value="" placeholder="" maxlength="120">
                </div>
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="permission">
                    <option value="0">Everyona can get it</option>
                    <option value="1">Premium only</option>
                  </select>
                </div>
                <div class="btn-group">
                  <button class="btn btn-success" type="submit" name="submit">Add</button>
                  <button class="btn btn-warning" type="reset" name="submit">Reset</button>
                </div>
              </div>
        </div>
            </form>
          <!-- End of form -->


        </div>
    </div>
<!-- End of modal layer -->
